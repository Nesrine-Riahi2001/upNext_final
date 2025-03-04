<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom ne doit pas être vide.')]
    #[Assert\Length(max: 32, maxMessage: 'Le nom ne doit pas dépasser {{ limit }} caractères.')]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z][a-zA-Z0-9\' ]*$/',
        message: 'Le nom ne doit contenir que des lettres, des chiffres, des espaces et des apostrophes, et doit commencer par une lettre.'
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'Le prix ne doit pas être vide.')]
    #[Assert\Positive(message: 'Le prix doit être un nombre positif.')]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'La catégorie ne doit pas être vide.')]
    #[Assert\Choice(choices: ['Dessin', 'Peinture', 'Sculpture', 'Edition', 'Photographie'], message: 'Choisissez une catégorie valide.')]
    private ?string $categorie = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'La description ne doit pas être vide.')]
    #[Assert\Callback([self::class, 'validateWordCount'])]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Commande $commande = null;

    #[ORM\Column(length: 50, nullable: false, options: ['default' => 'PENDING'])]
    #[Assert\NotBlank(message: 'Le statut d\'approbation ne doit pas être vide.')]
    #[Assert\Choice(choices: ['SUBMITTED', 'PENDING', 'ACCEPTED', 'REJECTED'], message: 'Choisissez un statut valide.')]
    private string $approvalStatus = 'PENDING';

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $statut = 'Disponible';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): static
    {
        $this->commande = $commande;
        return $this;
    }

    public function getApprovalStatus(): string
    {
        return $this->approvalStatus;
    }

    public function setApprovalStatus(string $approvalStatus): static
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public static function validateWordCount($description, \Symfony\Component\Validator\Context\ExecutionContextInterface $context, $payload)
    {
        $wordCount = str_word_count($description);
        if ($wordCount > 300) {
            $context->buildViolation('La description ne doit pas dépasser 300 mots.')
                ->atPath('description')
                ->addViolation();
        }
    }

    public function __toString(): string
    {
        return $this->nom ?? 'Produit sans nom';
    }
}