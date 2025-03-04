<?php

namespace App\Controller;

use App\Service\TwilioService;
use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Quiz; // Importez l'entité Quiz
use App\Repository\QuizRepository; // Importez le repository de Quiz
use App\Repository\QuestionRepository;
use Twilio\Rest\Client; // Import Twilio Client directly
use Symfony\Component\HttpFoundation\Session\SessionInterface;

#[Route('/reponse')]
final class ReponseController extends AbstractController
{
    private $twilioClient;
    private $twilioPhoneNumber;

    public function __construct(
        string $twilioAccountSid, // Inject Twilio credentials directly
        string $twilioAuthToken,
        string $twilioPhoneNumber
    ) {
        // Initialize Twilio client
        $this->twilioClient = new Client($twilioAccountSid, $twilioAuthToken);
        $this->twilioPhoneNumber = $twilioPhoneNumber;
    }

    #[Route('/reponse/', name: 'app_reponse_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository, QuizRepository $quizRepository): Response
    {
        $reponses = $reponseRepository->findAll();
        $quizs = $quizRepository->findAll(); // Fetch all quizzes

        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponses,
            'quizs' => $quizs, // Pass the quizzes to the template
        ]);
    }

    #[Route('/new', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/quiz/{quizId}/repondre', name: 'app_reponse_quiz_repondre', methods: ['GET', 'POST'])]
    public function repondre(
        Request $request,
        int $quizId,
        EntityManagerInterface $entityManager,
        QuestionRepository $questionRepository,
        QuizRepository $quizRepository,
        ReponseRepository $reponseRepository // Ajoutez le repository des réponses
    ): Response {
        // Récupérer le quiz
        $quiz = $quizRepository->find($quizId);
        if (!$quiz) {
            throw $this->createNotFoundException('Quiz non trouvé.');
        }
    
        // Récupérer les questions du quiz
        $questions = $questionRepository->findBy(['quiz' => $quizId]);
    
        if ($request->isMethod('POST')) {
            // Supprimer les réponses précédentes pour ce quiz
            $reponsesPrecedentes = $reponseRepository->findBy(['question' => $questions]);
            foreach ($reponsesPrecedentes as $reponse) {
                $entityManager->remove($reponse);
            }
            $entityManager->flush(); // Appliquer les suppressions
    
            $score = 0; // Réinitialiser le score à 0
    
            // Enregistrer les nouvelles réponses
            $reponsesSoumises = $request->request->all('reponse');
            foreach ($reponsesSoumises as $questionId => $reponseUtilisateur) {
                $question = $questionRepository->find($questionId);
    
                if (!$question) {
                    continue; // Ignorer si la question n'est pas trouvée
                }
    
                $reponse = new Reponse();
                $reponse->setQuestion($question);
                $reponse->setReponseUtilisateur($reponseUtilisateur);
                $reponse->setCorrecte($question->getReponseCorrecte() === $reponseUtilisateur ? 'oui' : 'non');
    
                if ($reponse->getCorrecte() === 'oui') {
                    $score++;
                }
    
                $entityManager->persist($reponse);
            }
    
            $entityManager->flush();
    
            // Envoyer un SMS directement depuis le contrôleur
            $message = sprintf(
                'Vous avez répondu au quiz : %s (Sujet : %s). Votre score est : %d/%d',
                $quiz->getTitreQuiz(),
                $quiz->getSujet(),
                $score,
                count($questions)
            );
    
            try {
                $this->twilioClient->messages->create(
                    '+21699375488', // Remplacez par le numéro de téléphone de l'utilisateur
                    [
                        'from' => $this->twilioPhoneNumber,
                        'body' => $message,
                    ]
                );
                $this->addFlash('success', 'SMS envoyé avec succès.');
            } catch (\Exception $e) {
                // Gérer l'erreur (par exemple, logger l'erreur ou afficher un message à l'utilisateur)
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi du SMS.');
            }
    
            return $this->redirectToRoute('app_reponse_quiz_resultats', ['quizId' => $quizId]);
        }
    
        return $this->render('reponse/quiz_repondre.html.twig', [
            'questions' => $questions,
            'quizId' => $quizId,
            'quiz' => $quiz, // Passer le quiz au template
        ]);
    }

    #[Route('/quiz/{quizId}/resultats', name: 'app_reponse_quiz_resultats')]
    public function resultats(int $quizId, ReponseRepository $reponseRepository, QuestionRepository $questionRepository): Response
    {
        $questions = $questionRepository->findBy(['quiz' => $quizId]);
        $score = 0;

        foreach ($questions as $question) {
            $reponses = $reponseRepository->findBy(['question' => $question]);

            $correct = false; // Initialiser à false pour chaque question

            foreach ($reponses as $reponse) {
                if ($reponse->getCorrecte() === 'oui') {
                    $correct = true;
                    break; // Une seule réponse correcte suffit
                }
            }

            if ($correct) {
                $score++;
            }
        }

        return $this->render('reponse/quiz_resultats.html.twig', [
            'quizId' => $quizId,
            'questions' => $questions,
            'score' => $score
        ]);
    }
}