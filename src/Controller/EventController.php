<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventFormType;
use App\Repository\ReservationRepository;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Core\Security;

class EventController extends AbstractController
{
    // Route pour assigner un utilisateur à un événement
    #[Route('/event/{id}/assign-user/{userId}', name: 'assign_user_to_event', methods: ['POST'])]
    public function assignUserToEvent(int $id, int $userId, EventRepository $eventRepository, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'événement par ID
        $event = $eventRepository->find($id);
        if (!$event) {
            return $this->json(['message' => 'Événement non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        // Récupérer l'utilisateur par ID
        $user = $userRepository->find($userId);
        if (!$user) {
            return $this->json(['message' => 'Utilisateur non trouvé.'], Response::HTTP_NOT_FOUND);
        }

        // Assigner l'utilisateur en tant qu'hôte de l'événement
        $event->setHost($user);

        // Sauvegarder l'événement avec l'utilisateur assigné
        $entityManager->persist($event);
        $entityManager->flush();

        // Réponse après assignation réussie
        return $this->json([
            'message' => 'Utilisateur assigné avec succès à l\'événement.',
            'event' => $event->getId(),
            'host' => $user->getId()
        ]);
    }

    // Route pour afficher tous les événements
    #[Route('/event', name: 'event_index')]
    public function index(EventRepository $eventRepository): Response
    {
        // Récupérer tous les événements depuis la base de données
        $events = $eventRepository->findAll();

        // Renvoyer la page avec la liste des événements
        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }

    // Route pour supprimer un événement
    #[Route('/event/delete/{id}', name: 'event_delete', methods: ['POST', 'DELETE'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $em): RedirectResponse
    {
        if ($this->isCsrfTokenValid('delete' . $event->getId(), $request->request->get('_token'))) {
            $em->remove($event);
            $em->flush();
    
            $this->addFlash('success', 'Événement supprimé avec succès.');
        }

        return $this->redirectToRoute('home');
    }

    #[Route('/event/edit/{id}', name: 'event_edit')]
    public function edit(Request $request, Event $event, EntityManagerInterface $em, SluggerInterface $slugger): Response
{
    // Créer le formulaire en remplissant les champs avec les valeurs existantes de l'événement
    $form = $this->createForm(EventFormType::class, $event);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();

        if ($imageFile) { // Si l'utilisateur a uploadé une nouvelle image
            // Supprimer l'ancienne image si elle existe
            if ($event->getImage()) {
                $oldImagePath = $this->getParameter('images_directory') . '/' . $event->getImage();
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Générer un nouveau nom sécurisé pour la nouvelle image
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
            }

            // Mettre à jour l'événement avec le nouveau nom de fichier
            $event->setImage($newFilename);
        }
        $em->flush();

        $this->addFlash('success', 'Événement modifié avec succès !');
        return $this->redirectToRoute('home');
    }

    return $this->render('event/edit.html.twig', [
        'form' => $form->createView(),
        'event' => $event
    ]);
}

    // Route pour créer un nouvel événement
    #[Route('/event/new', name: 'event_new')]
    public function new(Request $request, EntityManagerInterface $em, SluggerInterface $slugger, Security $security): Response
{
    // Création d'un nouvel événement
    $event = new Event();

    // Récupérer l'utilisateur connecté
    $user = $security->getUser(); // Récupère l'utilisateur connecté

    if ($user) {
        // Assigner l'utilisateur connecté en tant qu'hôte de l'événement
        $event->setHost($user);
    }

    // Par défaut, le statut est 'pending' (en attente)
    $event->setStatusEvent('pending');

    // Création du formulaire
    $form = $this->createForm(EventFormType::class, $event);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();#$form->get('image'):Récupère le champ image du formulaire,->getData(): Récupère le fichier téléchargé (ou null si aucun fichier n’a été envoyé)

        if ($imageFile) {#verif recuperation img ,si imageFile =null chy maysir sinn l code hedha y executi
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);# $imageFile->getClientOriginalName() → Récupère le nom du fichier tel qu’il a été envoyé par l’utilisateur (ex: photo de l'événement.png),,pathinfo(..., PATHINFO_FILENAME) → Extrait uniquement le nom du fichier sans l’extension (photo de l'événement).
            $safeFilename = $slugger->slug($originalFilename);#transforme le nom en un format sécurisé
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();# uniqid()=tzid id l ism l'img ,,trajaa l 'exetension w tzidha l'ism l'img 

            try {
                $imageFile->move(# move(destination, filename)==> Déplace l’image dans ce dossier sous son nouveau nom
                    $this->getParameter('images_directory'),# Récupère le chemin défini dans services.yaml
                    $newFilename
                );
            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
            }

            $event->setImage($newFilename);#stockage de nom de l'image
        }

        $em->persist($event);
        $em->flush();

        // Rediriger vers la page de l'événement après l'avoir créé
        return $this->redirectToRoute('home', ['id' => $event->getId()]);
    }

    return $this->render('event/new.html.twig', [
        'form' => $form->createView(),
    ]);
    }

    #[Route('/event/{id}', name: 'event_show')]     

    public function show(EntityManagerInterface $em, $id): Response
    {
        // Récupérer l'événement avec l'ID
        $event = $em->getRepository(Event::class)->find($id);

        // Si l'événement n'est pas trouvé, retourner une erreur 404
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }

        // Renvoyer la page avec les détails de l'événement
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }
    #[Route('/reservations', name:'reservation_list') ]
public function listReservations(EventRepository $eventRepository, ReservationRepository $reservationRepository, Security $security): Response
{
    $user = $security->getUser();

    // Récupérer les réservations de l'utilisateur
    $reservations = $reservationRepository->findBy(['user' => $user]);

    // Récupérer les événements créés par l'artiste connecté (où host_id = user.id)
    $artistEvents = [];
    if (in_array('ROLE_ARTIST', $user->getRoles())) {
        $artistEvents = $eventRepository->findBy(['host' => $user]);
    }

    return $this->render('reservation/index.html.twig', [
        'reservations' => $reservations,
        'artist_events' => $artistEvents, // Envoyer les événements de l'artiste à Twig
    ]);
}
// Route pour modifier le statut d'un événement
#[Route('/event/{id}/status/{status}', name: 'event_change_status')]
public function changeStatus(Event $event, string $status, EntityManagerInterface $em): Response
{

    // Vérifier si le statut est valide (pour éviter de modifier avec un statut incorrect)
    if (!in_array($status, ['pending', 'approved', 'rejected'])) {
        throw $this->createNotFoundException('Statut invalide.');
    }

    // Modifier le statut de l'événement
    $event->setStatusEvent($status);
    $em->flush();

    // Message flash pour indiquer que le statut a été modifié
    $this->addFlash('success', "Le statut de l'événement a été modifié en '$status'.");

    return $this->redirectToRoute('event_index', ['id' => $event->getId()]);
}
}
