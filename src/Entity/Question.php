<?php

// src/Entity/Question.php
namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le texte de la question ne peut pas être vide.", groups: ['Default', 'edit'])]
    #[Assert\Length(max: 100, maxMessage: "Le texte de la question ne peut pas dépasser {{ limit }} caractères.", groups: ['Default', 'edit'])]
    private ?string $texteQuestion = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "L'option 1 ne peut pas être vide.")]
    #[Assert\Length(max: 100, maxMessage: "L'option 1 ne peut pas dépasser {{ limit }} caractères.", groups: ['Default', 'edit'])]
    private ?string $option1 = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "L'option 2 ne peut pas être vide.")]
    #[Assert\Length(max: 100, maxMessage: "L'option 2 ne peut pas dépasser {{ limit }} caractères.", groups: ['Default', 'edit'])]
    private ?string $option2 = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "L'option 3 ne peut pas être vide.")]
    #[Assert\Length(max: 100, maxMessage: "L'option 3 ne peut pas dépasser {{ limit }} caractères.", groups: ['Default', 'edit'])]
    private ?string $option3 = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "L'option 4 ne peut pas être vide.")]
    #[Assert\Length(max: 100, maxMessage: "L'option 4 ne peut pas dépasser {{ limit }} caractères.", groups: ['Default', 'edit'])]
    private ?string $option4 = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "La réponse correcte ne peut pas être vide.")]
    #[Assert\Length(max: 100, maxMessage: "La réponse correcte ne peut pas dépasser {{ limit }} caractères.", groups: ['Default', 'edit'])]
    private ?string $reponseCorrecte = null;

    #[ORM\ManyToOne(inversedBy: 'questions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Quiz $quiz = null;


    #[ORM\OneToMany(mappedBy: 'question', targetEntity: Reponse::class, cascade: ['remove'])] // Add this line
    private Collection $reponses;

    public function __construct()
    {
        $this->reponses = new ArrayCollection(); // Initialize the $reponses collection
    }
    // Getters et Setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexteQuestion(): ?string
    {
        return $this->texteQuestion;
    }

    public function setTexteQuestion(string $texteQuestion): self
    {
        $this->texteQuestion = $texteQuestion;
        return $this;
    }

    public function getOption1(): ?string
    {
        return $this->option1;
    }

    public function setOption1(string $option1): self
    {
        $this->option1 = $option1;
        return $this;
    }

    public function getOption2(): ?string
    {
        return $this->option2;
    }

    public function setOption2(string $option2): self
    {
        $this->option2 = $option2;
        return $this;
    }

    public function getOption3(): ?string
    {
        return $this->option3;
    }

    public function setOption3(string $option3): self
    {
        $this->option3 = $option3;
        return $this;
    }

    public function getOption4(): ?string
    {
        return $this->option4;
    }

    public function setOption4(string $option4): self
    {
        $this->option4 = $option4;
        return $this;
    }

    public function getReponseCorrecte(): ?string // Assurez-vous que ce getter existe
    {
        return $this->reponseCorrecte;
    }

    public function setReponseCorrecte(string $reponseCorrecte): self // Assurez-vous que ce setter existe
    {
        $this->reponseCorrecte = $reponseCorrecte;
        return $this;
    }

    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quiz $quiz): self
    {
        $this->quiz = $quiz;
        return $this;
    }
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): static
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setQuestion($this);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): static
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getQuestion() === $this) {
                $reponse->setQuestion(null);
            }
        }

        return $this;
    }
}