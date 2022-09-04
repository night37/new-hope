<?php

namespace App\Entity;

use App\Repository\AnimauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimauxRepository::class)]
class Animaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $race = null;

    #[ORM\Column(length: 50)]
    private ?string $espece = null;

    #[ORM\Column(length: 50)]
    private ?string $gabarit = null;

    #[ORM\Column(length: 2)]
    private ?string $sexe = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column(length: 50)]
    private ?string $pelage = null;

    #[ORM\Column(length: 255)]
    private ?string $ville_adoption = null;

    #[ORM\Column(length: 255)]
    private ?string $cas_specifique = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $photos = [];

    #[ORM\Column]
    private ?int $association = null;

    #[ORM\Column]
    private ?int $association_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getEspece(): ?string
    {
        return $this->espece;
    }

    public function setEspece(string $espece): self
    {
        $this->espece = $espece;

        return $this;
    }

    public function getGabarit(): ?string
    {
        return $this->gabarit;
    }

    public function setGabarit(string $gabarit): self
    {
        $this->gabarit = $gabarit;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getPelage(): ?string
    {
        return $this->pelage;
    }

    public function setPelage(string $pelage): self
    {
        $this->pelage = $pelage;

        return $this;
    }

    public function getVilleAdoption(): ?string
    {
        return $this->ville_adoption;
    }

    public function setVilleAdoption(string $ville_adoption): self
    {
        $this->ville_adoption = $ville_adoption;

        return $this;
    }

    public function getCasSpecifique(): ?string
    {
        return $this->cas_specifique;
    }

    public function setCasSpecifique(string $cas_specifique): self
    {
        $this->cas_specifique = $cas_specifique;

        return $this;
    }

    public function getPhotos(): array
    {
        return $this->photos;
    }

    public function setPhotos(array $photos): self
    {
        $this->photos = $photos;

        return $this;
    }

    public function getAssociationId(): ?int
    {
        return $this->association_id;
    }

    public function setAssociationId(int $association_id): self
    {
        $this->association_id = $association_id;

        return $this;
    }
}
