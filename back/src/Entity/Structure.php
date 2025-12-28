<?php

namespace App\Entity;

use App\Entity\Animal;
use App\Enum\StructureType;
use ApiPlatform\Metadata\Get;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use App\Controller\StructureController;
use App\Repository\StructureRepository;
use ApiPlatform\OpenApi\Model\Operation;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ApiResource(
    normalizationContext: ['groups' => ['animal:read']],
    operations: [
        new Get(
            name: 'autocomplete_structure',
            uriTemplate: '/backoffice/structures/autocomplete',
            controller: 'App\Controller\StructureController::autocomplete',
            description: 'autocomplete structure address',
            openapi: new Operation(
                summary: 'autocomplete des adresses',
                description: 'Renvoie une liste d\'adresses correspondant aux termes de recherche fournis.',
                parameters: [
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'Url de recherche pour l\'autocomplete',
                        'required' => true,
                        'schema' => [
                            'type' => 'string',
                            'example' => 'communes / departements / regions'
                        ]
                    ],
                    [
                        'name' => 'departement',
                        'in' => 'query',
                        'description' => 'departement pour affiner la recherche',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => '75'
                        ]
                    ],
                    [
                        'name' => 'region',
                        'in' => 'query',
                        'description' => 'region pour affiner la recherche',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => '11'
                        ]
                    ],
                    [
                        'name' => 'name',
                        'in' => 'query',
                        'description' => 'Termes de recherche pour l\'autocomplete',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => 'paris'
                        ]
                    ]
                ]
            ),
        ),
        new Get(
            name: 'structure_get_all_structures',
            uriTemplate: '/backoffice/structure/getAllStructures',
            controller: 'App\Controller\StructureController::getAllStructures',
            description: 'Liste des structures',
            openapi: new Operation(
                summary: 'Liste des structures',
                description: 'Liste des structures',
            )
        )
    ]
)]
#[ORM\Entity(repositoryClass: StructureRepository::class)]


class Structure implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column]
    private ?float $latitude = null;

    #[ORM\Column]
    private ?float $longitude = null;

    #[ORM\Column(type: 'text')]
    private ?string $description = null;

    #[ORM\Column(enumType: StructureType::class)]
    private ?StructureType $structureType = null;

    #[ORM\Column]
    private ?bool $isActive = true;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\OneToMany(targetEntity: Animal::class, mappedBy: 'structure')]
    private Collection $animal;

    #[ORM\Column]
    private ?bool $isVerified = null;

    #[ORM\Column(length: 100)]
    private ?string $street = null;

    #[ORM\Column(length: 15)]
    private ?string $zip_code = null;

    public function __construct()
    {
        $this->animal = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }


    public function getRoles(): array
    {
        return ['ROLE_USER', 'ROLE_STRUCTURE'];
    }


    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;
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

    public function getStructureType(): ?StructureType
    {
        return $this->structureType;
    }

    public function setStructureType(StructureType $structureType): static
    {
        $this->structureType = $structureType;
        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return Collection<int, Animal>
     */
    public function getAnimal(): Collection
    {
        return $this->animal;
    }

    public function addAnimal(Animal $animal): static
    {
        if (!$this->animal->contains($animal)) {
            $this->animal->add($animal);
            $animal->setStructure($this);
        }
        return $this;
    }

    public function removeAnimal(Animal $animal): static
    {
        if ($this->animal->removeElement($animal)) {
            if ($animal->getStructure() === $this) {
                $animal->setStructure(null);
            }
        }
        return $this;
    }

    public function isVerified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): static
    {
        $this->street = $street;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    public function setZipCode(string $zip_code): static
    {
        $this->zip_code = $zip_code;

        return $this;
    }
}
