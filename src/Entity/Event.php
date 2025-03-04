<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\EventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre de l'événement est obligatoire.")]
    #[Assert\Length(min: 5, max: 255, minMessage: "Le titre doit contenir au moins 5 caractères.", maxMessage: "Le titre ne doit pas dépasser 255 caractères.")]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(min: 10, minMessage: "La description doit contenir au moins 10 caractères.")]
    private ?string $descrip = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Assert\NotBlank(message: "La date de début est obligatoire.")]
    #[Assert\Type(type: \DateTimeInterface::class, message: "Le format de la date est invalide.")]
    private ?\DateTimeInterface $startdate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire.")]
    #[Assert\Type(type: \DateTimeInterface::class, message: "Le format de la date est invalide.")]
    #[Assert\GreaterThan(propertyPath: "startdate", message: "La date de fin doit être après la date de début.")]
    private ?\DateTimeInterface $enddate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status_event = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le nombre de billets est obligatoire.")]
    #[Assert\Positive(message: "Le nombre de billets doit être un nombre positif.")]
    private ?int $ticketCount = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
#[ORM\JoinColumn(nullable: false)]
private ?User $host = null; // L'artiste qui a publié l'événement


    #[ORM\Column(nullable: true)]
    private ?int $guest_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Le lieu de l'événement est obligatoire.")]
    private ?string $location = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message: "Le prix du billet est obligatoire.")]
    #[Assert\Positive(message: "Le prix du billet doit être un nombre positif.")]
    private ?float $ticketPrice = null;

    // Déclaration de la propriété reservations
    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Reservation::class)]
    private Collection $reservations;

    // ✅ Constructeur pour initialiser la collection de réservations
    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    // Getter pour récupérer les réservations
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    // Ajouter une réservation
    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setEvent($this);
        }

        return $this;
    }

    // Retirer une réservation
    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->contains($reservation)) {
            $this->reservations->removeElement($reservation);
            if ($reservation->getEvent() === $this) {
                $reservation->setEvent(null);
            }
        }

        return $this;
    }

    // ✅ Getters et setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getDescrip(): ?string
    {
        return $this->descrip;
    }

    public function setDescrip(?string $descrip): static
    {
        $this->descrip = $descrip;
        return $this;
    }

    public function getStartdate(): ?\DateTimeInterface
    {
        return $this->startdate;
    }

    public function setStartdate(?\DateTimeInterface $startdate): static
    {
        $this->startdate = $startdate;
        return $this;
    }

    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    public function setEnddate(?\DateTimeInterface $enddate): static
    {
        $this->enddate = $enddate;
        return $this;
    }

    public function getStatusEvent(): ?string
    {
        return $this->status_event;
    }

    public function setStatusEvent(?string $status_event): static
    {
        $this->status_event = $status_event;
        return $this;
    }

    public function getTicketCount(): ?int
    {
        return $this->ticketCount;
    }

    public function setTicketCount(?int $ticketCount): static
    {
        $this->ticketCount = $ticketCount;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;
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

    public function getTicketPrice(): ?float
    {
        return $this->ticketPrice;
    }

    public function setTicketPrice(?float $ticketPrice): static
    {
        $this->ticketPrice = $ticketPrice;
        return $this;
    }

    public function getRemainingTickets(): int
    {
        // Supposons qu'il existe une méthode qui calcule le nombre de tickets réservés
        $reservedTickets = 0;
        // Supposons que tu utilises Doctrine pour calculer les tickets réservés
        // $reservedTickets = $this->getReservations()->sum('quantity');
    
        return $this->ticketCount - $reservedTickets;
    }


    public function getHost(): ?User
    {
        return $this->host;
    }

    public function setHost(?User $host): static
    {
        $this->host = $host;
        return $this;
    }
    
    
}
