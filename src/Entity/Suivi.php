<?php

namespace App\Entity;

use App\Repository\SuiviRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: SuiviRepository::class)]
class Suivi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(min: 10, minMessage: "La description  ne peut pas etre < a 10 caractères.")]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description_Suivi = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_Suivi = null;

    #[ORM\Column(length: 255,nullable: true)]
    private ?string $Statisfaction = null;

    #[ORM\ManyToOne(inversedBy: 'Liste_Suivis_Rec')]
    private ?Reclamation $reclamation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionSuivi(): ?string
    {
        return $this->Description_Suivi;
    }

    public function setDescriptionSuivi(string $Description_Suivi): static
    {
        $this->Description_Suivi = $Description_Suivi;

        return $this;
    }

    public function getDateSuivi(): ?\DateTimeInterface
    {
        return $this->Date_Suivi;
    }

    public function setDateSuivi(\DateTimeInterface $Date_Suivi): static
    {
        $this->Date_Suivi = $Date_Suivi;

        return $this;
    }

    public function getStatisfaction(): ?string
    {
        return $this->Statisfaction;
    }

    public function setStatisfaction(string $Statisfaction): static
    {
        $this->Statisfaction = $Statisfaction;

        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): static
    {
        $this->reclamation = $reclamation;

        return $this;
    }
}
