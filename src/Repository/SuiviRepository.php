<?php

namespace App\Repository;

use App\Entity\Suivi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Suivi>
 */
class SuiviRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Suivi::class);
    }



    public function getTauxSatisfaction(): float
{
    $totalSuivis = $this->createQueryBuilder('s')
        ->select('COUNT(s.id)')
        ->getQuery()
        ->getSingleScalarResult();

    $suivisSatisfaits = $this->createQueryBuilder('s')
        ->select('COUNT(s.id)')
        ->where('s.Statisfaction = :satisfait')
        ->setParameter('satisfait', 'oui')
        ->getQuery()
        ->getSingleScalarResult();

    if ($totalSuivis == 0) {
        return 0; // Éviter la division par zéro
    }

    return ($suivisSatisfaits / $totalSuivis) * 100;
}

public function getSatisfactionByType(): array
{
    return $this->createQueryBuilder('s')
        ->select('r.Type_Rec as type, 
                  COUNT(s.id) as total_suivis, 
                  SUM(CASE WHEN s.Statisfaction = \'oui\' THEN 1 ELSE 0 END) as satisfaits')
        ->join('s.reclamation', 'r')
        ->groupBy('r.Type_Rec')
        ->getQuery()
        ->getResult();
}




    //    /**
    //     * @return Suivi[] Returns an array of Suivi objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Suivi
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
