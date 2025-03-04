<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;



#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre est obligatoire.")]
    #[Assert\Length(max: 20, maxMessage: "Le titre ne peut pas dépasser 20 caractères.")]
    private ?string $Titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Email(message: "Veuillez entrer un email valide.")]
    private ?string $MailClient_Rec = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
   
    private ?\DateTimeInterface $Date_Creation_Rec = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type de réclamation est obligatoire.")]
    private ?string $Type_Rec = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(min: 10, minMessage: "La description  ne peut pas etre < a 10 caractères.")]

    private ?string $Description_Rec = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Fichier_PJ_Rec = null;


    // Ajoutez une propriété virtuelle pour le formulaire (cela ne sera pas mappé à la base de données)
    private $file;

    // Setter et getter pour le champ virtuel `file` (pour l'upload du fichier)
    public function setFile(File $file = null): void
    {
        $this->file = $file;

        // Si un fichier est téléchargé, nous définissons le nom de fichier à la date actuelle + un identifiant unique
        if ($file) {
            // Attribuer un nom de fichier unique pour éviter les conflits
            $this->Fichier_PJ_Rec = uniqid().'.'.$file->guessExtension();
        }
    }

    public function getFile(): ?File
    {
        return $this->file;
    }

    #[ORM\Column(length: 255)]
    private ?string $Status_Rec = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Resolution_Rec = null;

    /**
     * @var Collection<int, Suivi>
     */
    #[ORM\OneToMany(targetEntity: Suivi::class, mappedBy: 'reclamation',cascade:["remove"])]
    private Collection $Liste_Suivis_Rec;

    #[ORM\ManyToOne(inversedBy: 'Reclamations')]
    private ?User $user = null;

    public function __construct()
    {
        $this->Liste_Suivis_Rec = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): static
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getMailClientRec(): ?string
    {
        return $this->MailClient_Rec;
    }

    public function setMailClientRec(?string $MailClient_Rec): static
    {
        $this->MailClient_Rec = $MailClient_Rec;

        return $this;
    }

    public function getDateCreationRec(): ?\DateTimeInterface
    {
        return $this->Date_Creation_Rec;
    }

    public function setDateCreationRec(\DateTimeInterface $Date_Creation_Rec): static
    {
        $this->Date_Creation_Rec = $Date_Creation_Rec;

        return $this;
    }

    public function getTypeRec(): ?string
    {
        return $this->Type_Rec;
    }

    public function setTypeRec(string $Type_Rec): static
    {
        $this->Type_Rec = $Type_Rec;

        return $this;
    }

    public function getDescriptionRec(): ?string
    {
        return $this->Description_Rec;
    }

    public function setDescriptionRec(string $Description_Rec): static
    {
        $this->Description_Rec = $Description_Rec;

        return $this;
    }

    public function getFichierPJRec(): ?string
    {
        return $this->Fichier_PJ_Rec;
    }

    public function setFichierPJRec(?string $Fichier_PJ_Rec): static
    {
        $this->Fichier_PJ_Rec = $Fichier_PJ_Rec;

        return $this;
    }

    public function getStatusRec(): ?string
    {
        return $this->Status_Rec;
    }

    public function setStatusRec(string $Status_Rec): static
    {
        $this->Status_Rec = $Status_Rec;

        return $this;
    }

    public function getDateResolutionRec(): ?\DateTimeInterface
    {
        return $this->Date_Resolution_Rec;
    }

    public function setDateResolutionRec(?\DateTimeInterface $Date_Resolution_Rec): static
    {
        $this->Date_Resolution_Rec = $Date_Resolution_Rec;

        return $this;
    }

    
    /**
     * @return Collection<int, Suivi>
     */
    public function getListeSuivisRec(): Collection
    {
        return $this->Liste_Suivis_Rec;
    }

    public function addListeSuivisRec(Suivi $listeSuivisRec): static
    {
        if (!$this->Liste_Suivis_Rec->contains($listeSuivisRec)) {
            $this->Liste_Suivis_Rec->add($listeSuivisRec);
            $listeSuivisRec->setReclamation($this);
        }

        return $this;
    }

    public function removeListeSuivisRec(Suivi $listeSuivisRec): static
    {
        if ($this->Liste_Suivis_Rec->removeElement($listeSuivisRec)) {
            // set the owning side to null (unless already changed)
            if ($listeSuivisRec->getReclamation() === $this) {
                $listeSuivisRec->setReclamation(null);
            }
        }

        return $this;
    }
    public function __toString(): string
    {
        return $this->getTitre(); // Assurez-vous que cette méthode existe dans votre entité Reclamation
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
