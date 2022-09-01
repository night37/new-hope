<?php

namespace App\Entity;

use App\Repository\AnimalsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalsRepository::class)]
class Animals
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 50)]
    private ?string $breed = null;

    #[ORM\Column(length: 50)]
    private ?string $specie = null;

    #[ORM\Column(length: 20)]
    private ?string $size = null;

    #[ORM\Column(length: 2)]
    private ?string $sexe = null;

    #[ORM\Column(length: 20)]
    private ?string $coat = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column(length: 255)]
    private ?string $association = null;

    #[ORM\Column(length: 255)]
    private ?string $other = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBreed(): ?string
    {
        return $this->breed;
    }

    public function setBreed(string $breed): self
    {
        $this->breed = $breed;

        return $this;
    }

    public function getspecie(): ?string
    {
        return $this->specie;
    }

    public function setspecie(string $specie): self
    {
        $this->specie = $specie;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

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

    public function getCoat(): ?string
    {
        return $this->coat;
    }

    public function setCoat(string $coat): self
    {
        $this->coat = $coat;

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

    public function getAssociation(): ?string
    {
        return $this->association;
    }

    public function setAssociation(string $association): self
    {
        $this->association = $association;

        return $this;
    }

    public function getOther(): ?string
    {
        return $this->other;
    }

    public function setOther(string $other): self
    {
        $this->other = $other;

        return $this;
    }
}
