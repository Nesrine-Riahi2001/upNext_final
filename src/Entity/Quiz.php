<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le titre du quiz ne peut pas être vide.", groups: ['Default', 'edit'])]
    #[Assert\Length(max: 100, maxMessage: "Le titre du quiz ne peut pas dépasser {{ limit }} caractères.", groups: ['Default', 'edit'])]
    private ?string $titreQuiz = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le sujet du quiz ne peut pas être vide.", groups: ['Default', 'edit'])]
    #[Assert\Length(max: 100, maxMessage: "Le sujet du quiz ne peut pas dépasser {{ limit }} caractères.", groups: ['Default', 'edit'])]
    private ?string $sujet = null;

    /**
     * @var Collection<int, Question>
     */
    // src/Entity/Quiz.php
#[ORM\OneToMany(mappedBy: 'quiz', targetEntity: Question::class, cascade: ['remove'])]
private Collection $questions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreQuiz(): ?string
    {
        return $this->titreQuiz;
    }

    public function setTitreQuiz(string $titreQuiz): static
    {
        $this->titreQuiz = $titreQuiz;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): static
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): static
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->setQuiz($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): static
    {
        if ($this->questions->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getQuiz() === $this) {
                $question->setQuiz(null);
            }
        }

        return $this;
    }
}
