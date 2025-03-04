<?php

namespace App\Repository;

use App\Entity\Reclamation;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }


    // src/Repository/ReclamationRepository.php
    public function countReclamationsByDate(): array
    {
        $conn = $this->getEntityManager()->getConnection();
    
        $sql = "SELECT DATE(Date_Creation_Rec) as date, COUNT(id) as count FROM reclamation GROUP BY date ORDER BY date ASC";
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
    
        return $resultSet->fetchAllAssociative();
    }
    public function countReclamationsByType(): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.Type_Rec as type, COUNT(r.id) as count')
            ->groupBy('r.Type_Rec')
            ->getQuery()
            ->getResult();
    }

   
    public function searchReclamations(string $search, User $user): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.user = :user') // Filtrer par utilisateur connecté
            ->andWhere(
                '(LOWER(r.Titre) LIKE LOWER(:search) 
                OR LOWER(r.Type_Rec) LIKE LOWER(:search) 
                OR LOWER(r.Status_Rec) LIKE LOWER(:search))'
            ) // Regrouper toutes les conditions dans une seule parenthèse
            ->setParameter('user', $user)
            ->setParameter('search', '%' . strtolower($search) . '%')
            ->getQuery()
            ->getResult();
    }
    
    

    public function findAlltri(User $user): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.user = :user') // Filtrer par utilisateur connecté
            ->setParameter('user', $user)
            ->orderBy('r.Titre', 'ASC') // Trier par Titre (ordre croissant)
            ->getQuery()
            ->getResult();
    }
    

    //    /**
    //     * @return Reclamation[] Returns an array of Reclamation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Reclamation
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
