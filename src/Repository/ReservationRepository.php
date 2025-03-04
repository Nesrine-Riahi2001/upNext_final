<?php

namespace App\Repository;

use App\Entity\Reservation;
use App\Entity\Event; // Importation de la classe Event
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    // Méthode pour récupérer les réservations par hôte (artiste)
    public function findByEventHost($user)
    {
        return $this->createQueryBuilder('r')
            ->join('r.event', 'e')
            ->where('e.host = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    // Méthode pour récupérer les réservations par utilisateur
    public function findByUser($user)
    {
        return $this->createQueryBuilder('r')
            ->where('r.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param Event $event
     * @return int
     */
    public function countReservationsByEvent(Event $event): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.event = :event') // L'événement dans la réservation
            ->setParameter('event', $event)
            ->getQuery()
            ->getSingleScalarResult(); // Retourne le résultat sous forme de nombre
    }

    // Méthode pour récupérer les réservations des événements créés par un artiste
    // Vous pouvez ajouter ici une méthode si nécessaire, comme dans le commentaire de la méthode précédente.
}

