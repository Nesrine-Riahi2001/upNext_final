<?php

namespace App\Repository;

use App\Entity\Quiz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Quiz>
 *
 * @method Quiz|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quiz|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quiz[]    findAll()
 * @method Quiz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuizRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quiz::class);
    }

    /**
     * Recherche des quiz par titre.
     *
     * @param string $title Le titre (ou une partie du titre) à rechercher.
     * @return Quiz[] Retourne un tableau de Quiz correspondant au titre.
     */
   public function findByTitleAndSort(string $title, string $sortBy = 'titreQuiz', string $order = 'ASC'): array
{
    $qb = $this->createQueryBuilder('q')
        ->leftJoin('q.questions', 'qu') // Jointure avec les questions
        ->addSelect('qu') // Sélectionner les questions
        ->where('q.titreQuiz LIKE :title')
        ->setParameter('title', '%' . $title . '%');

    // Gestion du tri
    if ($sortBy === 'nombre_questions') {
        $qb->groupBy('q.id')
           ->orderBy('COUNT(qu.id)', $order);
    } else {
        $qb->orderBy('q.' . $sortBy, $order);
    }

    return $qb->getQuery()->getResult();
}

    /**
     * Récupère tous les quiz avec un tri avancé.
     *
     * @param string $sortBy Champ de tri (titre, sujet, nombre_questions).
     * @param string $order Ordre de tri (ASC ou DESC).
     * @return Quiz[]
     */
    public function findAllSorted(string $sortBy = 'titreQuiz', string $order = 'ASC'): array
{
    $qb = $this->createQueryBuilder('q');

    // Ajout d'un LEFT JOIN pour compter les questions
    if ($sortBy === 'nombre_questions') {
        $qb->leftJoin('q.questions', 'qu')
           ->groupBy('q.id')
           ->orderBy('COUNT(qu.id)', $order);
    } else {
        // Vérification des critères valides pour éviter les injections SQL
        $allowedFields = ['titreQuiz', 'sujet'];
        if (!in_array($sortBy, $allowedFields)) {
            $sortBy = 'titreQuiz'; // Valeur par défaut
        }

        $qb->orderBy('q.' . $sortBy, $order);
    }

    return $qb->getQuery()->getResult();
}

}
