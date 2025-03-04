<?php

// src/Controller/QuizController.php
namespace App\Controller;
use Knp\Snappy\Pdf;
use App\Entity\Quiz;
use App\Entity\Question;
use App\Form\QuizType;
use App\Form\QuestionType;
use App\Repository\QuizRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/quiz')]
class QuizController extends AbstractController
{
    #[Route('/', name: 'quiz_index', methods: ['GET', 'POST'])]
    public function index(Request $request, QuizRepository $quizRepository, EntityManagerInterface $entityManager): Response
    {
        // Ajouter un nouveau quiz
        $quiz = new Quiz();
        $quizForm = $this->createForm(QuizType::class, $quiz);
        $quizForm->handleRequest($request);

        if ($quizForm->isSubmitted() && $quizForm->isValid()) {
            $entityManager->persist($quiz);
            $entityManager->flush();

            return $this->redirectToRoute('quiz_index');
        }

        // Récupérer les paramètres de tri de l'URL
        $sortBy = $request->query->get('sortBy', 'titre'); // Par défaut "titre"
        $order = $request->query->get('order', 'ASC'); // Par défaut "ASC"

        // Récupérer la liste des quizzes triés
        $quizzes = $quizRepository->findAllSorted($sortBy, $order);

        return $this->render('quiz/index.html.twig', [
            'quizzes' => $quizzes,
            'quizForm' => $quizForm->createView(),
            'currentSortBy' => $sortBy,
            'currentOrder' => $order,
        ]);
    }
    #[Route('/quiz/pdf', name: 'quiz_pdf')]
    public function generatePdf(Pdf $pdf, QuizRepository $quizRepository): Response
    {
        $quizzes = $quizRepository->findAll();
    
        $html = $this->renderView('quiz/pdf.html.twig', [
            'quizzes' => $quizzes
        ]);
    
        // Chemin où enregistrer le fichier PDF
        $pdfPath = 'PI-upNext\pdf';
    
        // Vérifier si le fichier existe et le supprimer avant de générer un nouveau
        if (file_exists($pdfPath)) {
            unlink($pdfPath);
        }
    
        // Générer et sauvegarder le PDF
        $pdf->generateFromHtml($html, $pdfPath);
    
        return new Response(
            file_get_contents($pdfPath),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="quiz_liste.pdf"'
            ]
        );
    }

    #[Route('/{id}/add-question', name: 'quiz_add_question', methods: ['GET', 'POST'])]
    public function addQuestion(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        $question = new Question();
        $question->setQuiz($quiz); // Associer la question au quiz

        $questionForm = $this->createForm(QuestionType::class, $question);
        $questionForm->handleRequest($request);

        if ($questionForm->isSubmitted() && $questionForm->isValid()) {
            $entityManager->persist($question);
            $entityManager->flush();

            return $this->redirectToRoute('quiz_index');
        }

        return $this->render('quiz/add_question.html.twig', [
            'quiz' => $quiz,
            'questionForm' => $questionForm->createView(),
        ]);
    }
    #[Route('/quiz/search', name: 'quiz_search')]
public function search(Request $request, QuizRepository $quizRepository): Response
{
    $title = $request->query->get('title', '');
    $sortBy = $request->query->get('sortBy', 'titreQuiz'); // Par défaut, trier par 'titreQuiz'
    $order = $request->query->get('order', 'ASC'); // Par défaut, ordre croissant

    // Récupérer les quizzes triés
    $quizzes = $quizRepository->findByTitleAndSort($title, $sortBy, $order);

    if ($request->isXmlHttpRequest()) {
        return $this->render('quiz/_quiz_list.html.twig', [
            'quizzes' => $quizzes
        ]);
    }

    return $this->render('quiz/index.html.twig', [
        'quizzes' => $quizzes
    ]);
}


    
    

    #[Route('/{id}', name: 'quiz_delete', methods: ['POST'])]
public function delete(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
{
    // Vérifier le token CSRF pour la sécurité
    if ($this->isCsrfTokenValid('delete'.$quiz->getId(), $request->request->get('_token'))) {
        // Supprimer toutes les questions associées au quiz
        foreach ($quiz->getQuestions() as $question) {
            $entityManager->remove($question); // Supprime chaque question
        }

        // Supprimer le quiz
        $entityManager->remove($quiz);
        $entityManager->flush(); // Exécute les suppressions en base de données
    }

    // Rediriger vers la liste des quiz
    return $this->redirectToRoute('quiz_index');
}
#[Route('/{id}/edit', name: 'quiz_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(QuizType::class, $quiz);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid(['edit'])) { // <-- Add the 'edit' group here
        $entityManager->flush();
        return $this->redirectToRoute('quiz_index');
    }

    return $this->render('quiz/edit.html.twig', [
        'quiz' => $quiz,
        'form' => $form->createView(),
    ]);
}
}