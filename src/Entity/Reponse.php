<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $reponseUtilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $correcte = null;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Question $question = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReponseUtilisateur(): ?string
    {
        return $this->reponseUtilisateur;
    }

    public function setReponseUtilisateur(string $reponseUtilisateur): static
    {
        $this->reponseUtilisateur = $reponseUtilisateur;

        return $this;
    }

    public function getCorrecte(): ?string
    {
        return $this->correcte;
    }

    public function setCorrecte(string $correcte): static
    {
        $this->correcte = $correcte;

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): static
    {
        $this->question = $question;

        return $this;
    }
}
