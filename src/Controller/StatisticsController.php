<?php
namespace App\Controller;

use App\Repository\EventRepository;
use App\Repository\ReservationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class StatisticsController extends AbstractController
{
    #[Route('/statistics', name: 'statistics')]
    public function index(
        EventRepository $eventRepo, 
        ReservationRepository $reservationRepo,
        PaginatorInterface $paginator, 
        Request $request,
        UserInterface $user
    ): Response {
        // Récupérer la requête pour les événements de l'hôte (user)
        $queryBuilder = $eventRepo->createQueryBuilder('e')
            ->where('e.host = :user')
            ->setParameter('user', $user);

        // Pagination des événements
        $pagination = $paginator->paginate(
            $queryBuilder, // On passe ici le QueryBuilder à la pagination
            $request->query->getInt('page', 1), // Numéro de la page actuelle
            5 // Nombre d'événements par page
        );

        // Créer un tableau des événements avec leur nombre de réservations
        $eventStats = [];
        foreach ($pagination->getItems() as $event) {
            // Calculer le nombre de réservations pour chaque événement
            $reservations = $reservationRepo->countReservationsByEvent($event); // Nombre de réservations par événement
            $eventStats[] = [
                'event' => $event,
                'reservations' => $reservations,
            ];
        }

        // Retourner la vue avec les données des événements et leurs statistiques
        return $this->render('statistics/index.html.twig', [
            'pagination' => $pagination,
            'eventStats' => $eventStats,
        ]);
    }
}
