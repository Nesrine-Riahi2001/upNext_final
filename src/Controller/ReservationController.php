<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Event;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Form\ReservationType; // Ajoutez cette ligne pour importer ReservationType

final class ReservationController extends AbstractController
{
    #[Route('/reservations', name: 'reservation_index')]
    public function index(EntityManagerInterface $entityManager, Security $security): Response
{
    $user = $security->getUser(); // Récupère l'utilisateur actuellement authentifié

    if (!$user) {
        throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
    }

    // Récupérer les réservations de cet utilisateur
    $reservations = $entityManager->getRepository(Reservation::class)->findBy(['user' => $user]);

    return $this->render('reservation/index.html.twig', [
        'reservations' => $reservationRepository->findAll(),
    ]);
}
#[Route('/reservationss', name: 'reservation_indexart')]
    public function indexart(EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Si l'utilisateur est un artiste, on récupère ses événements et les réservations associées
        if (in_array('ROLE_ARTIST', $user->getRoles())) {
            // Récupérer les événements publiés par l'artiste
            $events = $entityManager->getRepository(Event::class)
                ->findBy(['host' => $user]); // Trouver les événements où l'hôte est l'artiste connecté

            // Récupérer toutes les réservations associées à ces événements
            $reservations = $entityManager->getRepository(Reservation::class)
                ->createQueryBuilder('r')
                ->innerJoin('r.event', 'e')
                ->where('e.host = :host')
                ->setParameter('host', $user)
                ->getQuery()
                ->getResult();
        } else {
            // Si l'utilisateur n'est pas un artiste, on ne lui montre pas de réservations
            $reservations = [];
        }

        return $this->render('reservation/indexart.html.twig', [
            'reservations' => $reservations,
        ]);
    }

#[Route('/reservation/new', name: 'reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, EventRepository $eventRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_register');
        }

        // Vérifier que l'ID de l'événement est bien transmis
        $eventId = $request->query->get('id');
        if (!$eventId) {
            throw $this->createNotFoundException('Aucun événement sélectionné pour la réservation.');
        }

        // Trouver l'événement dans la base de données
        $event = $eventRepository->find($eventId);
        if (!$event) {
            throw $this->createNotFoundException('L\'événement sélectionné est introuvable.');
        }

        // Vérifier qu'il y a encore des billets disponibles
        $remainingTickets = $event->getTicketCount();
        if ($remainingTickets <= 0) {
            $this->addFlash('error', 'Désolé, aucun billet n\'est disponible pour cet événement.');
            return $this->redirectToRoute('event_show', ['id' => $eventId]);
        }

        // Créer la réservation avec l'utilisateur et l'événement
        $reservation = new Reservation();
        $reservation->setUser($user);
        $reservation->setEvent($event);

        // Passer le nombre de billets disponibles à la vue du formulaire
        $form = $this->createForm(ReservationType::class, $reservation, [
            'availableTickets' => $remainingTickets, // Passer le nombre de billets disponibles à l'option
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Calculer le prix total de la réservation
            $reservation->calculateTotalPrice();

            // Persister la réservation dans la base de données
            $entityManager->persist($reservation);
            $entityManager->flush();

            // Mettre à jour le nombre de tickets restants pour l'événement
            $event->setTicketCount($remainingTickets - $reservation->getQuantity());
            $entityManager->flush();

            // Confirmation de la réservation
            $this->addFlash('success', 'Votre réservation a bien été effectuée !');
            return $this->redirectToRoute('reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation/{id}/edit', name: 'reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour la réservation dans la base de données
            $entityManager->flush();

            // Confirmation de l'édition
            $this->addFlash('success', 'Votre réservation a bien été modifiée !');
            return $this->redirectToRoute('reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        // Vérification CSRF
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/admin/reservations', name: 'admin_reservations')]
public function indexadmin(EntityManagerInterface $entityManager): Response
{
    $reservations = $entityManager->getRepository(Reservation::class)->findAll();

    return $this->render('reservation/reservationadmin_index.html.twig', [
        'reservations' => $reservations,
    ]);
}

} 
    

