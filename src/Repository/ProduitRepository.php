<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produit>
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    // App\Repository\ProduitRepository.php
public function findByAdvancedSearch(?string $nom = null, ?float $prix = null, ?string $categorie = null, ?string $sort = null): array
{
    $queryBuilder = $this->createQueryBuilder('p');

    if ($nom !== null && $nom !== '') {
        $queryBuilder->andWhere('p.nom LIKE :nom')
            ->setParameter('nom', '%' . $nom . '%');
    }

    if ($prix !== null) {
        $queryBuilder->andWhere('p.prix = :prix')
            ->setParameter('prix', $prix);
    }

    if ($categorie !== null && $categorie !== '') {
        $queryBuilder->andWhere('p.categorie = :categorie')
            ->setParameter('categorie', $categorie);
    }

    if ($sort === 'nom') {
        $queryBuilder->orderBy('p.nom', 'ASC');
    }

    return $queryBuilder->getQuery()->getResult();
}
}