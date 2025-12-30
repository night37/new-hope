<?php

namespace App\Entity;

use App\Enum\Size;
use App\Enum\Type;
use App\Enum\Breed;
use App\Enum\Color;
use App\Enum\Gender;
use App\Enum\Affinity;
use App\Enum\AdoptionStatus;
use ApiPlatform\Metadata\Get;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AnimalRepository;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use ApiPlatform\OpenApi\Model\Operation;


#[ORM\Entity(repositoryClass: AnimalRepository::class)]
#[Vich\Uploadable]
#[ApiResource(
    normalizationContext: ['groups' => ['animal:read']],
    denormalizationContext: ['groups' => ['animal:write']],

    operations: [
        new Get(
            name: 'api_animal_filters',
            uriTemplate: '/backoffice/animal/filters',
            controller: 'App\Controller\AnimalController::getFiltersList',
            openapi: new Operation(
                summary: 'Filtres pour animaux',
                description: 'Récupère la liste complète des filtres disponibles pour les animaux'
            )
        ),
        new Get(
            name: 'api_animals_list',
            uriTemplate: '/backoffice/animal/animalsList',
            controller: 'App\Controller\AnimalController::index',
            description: 'Get the list of animals',
            openapi: new Operation(
                summary: 'Liste des animaux',
                description: 'Récupère la liste complète des animaux'
            )
        ),
        new Get(
            name: 'api_animal_filters_results',
            uriTemplate: '/backoffice/animal/filtersResults',
            controller: 'App\Controller\AnimalController::getFiltersResults',
            description: 'Get the list of animal filters results',
            openapi: new Operation(
                summary: 'Liste des résultats de filtres d\'animaux',
                description: 'Récupère la liste complète des résultats de filtres d\'animaux',
                parameters: [
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'espece',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => 'chien/chat'
                        ]
                    ],
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'race',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => 'labrador'
                        ]
                    ],
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'gabarit',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => 'grand'
                        ]
                    ],
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'age',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => '12'
                        ]
                    ],
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'lieu d\'adoption',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => 'ville'
                        ]
                    ],
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'pelage',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => 'court/long'
                        ]
                    ],
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'cas spécifique',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => 'handicapé/âgé/urgent'
                        ]
                    ],
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'affinité',
                        'required' => false,
                        'schema' => [
                            'type' => 'string',
                            'example' => 'chien/chat/enfant'
                        ]
                    ]
                ]
            )
        ),
        new Get(
            name: 'api_get_random_last_animals',
            uriTemplate: '/backoffice/animal/getRandomLastAnimals',
            controller: 'App\Controller\AnimalController::getRandomLastAnimals',
            description: 'Get a random list of the last animals',
            openapi: new Operation(
                summary: 'Liste aléatoire des derniers animaux',
                description: 'Récupère une liste aléatoire des derniers animaux'
            )
        ),
        new Get(
            name: 'api_find_by_id',
            uriTemplate: '/backoffice/animal/findById',
            controller: 'App\Controller\AnimalController::findById',
            description: 'find animal by id',
            openapi: new Operation(
                summary: 'trouver un animal avec son id',
                parameters: [
                    [
                        'name' => 'option',
                        'in' => 'query',
                        'description' => 'id de l\'animal',
                        'required' => true,
                        'schema' => [
                            'type' => 'string',
                            'example' => '5'
                        ]
                    ],
                ]
            )
        )
    ]
)]
class Animal
{

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Groups(['animal:read'])]
    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[Groups(['animal:read'])]
    #[ORM\Column(enumType: Gender::class)]
    private ?Gender $gender = null;

    #[Groups(['animal:read'])]
    #[ORM\Column]
    private ?int $age = null;

    #[Groups(['animal:read'])]
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Structure $structure = null;

    #[Groups(['animal:read'])]
    #[ORM\Column]
    private ?bool $outDepartment = null;

    #[ORM\Column]
    #[Groups(['animal:read'])]
    private ?bool $highlight = null;

    #[Groups(['animal:read'])]
    #[ORM\Column(enumType: Size::class)]
    private ?Size $size = null;

    #[Groups(['animal:read'])]
    #[ORM\Column(enumType: Color::class)]
    private ?Color $color = null;

    #[Groups(['animal:read'])]
    #[ORM\Column(type: 'json')]
    private array $affinity = [];

    #[Groups(['animal:read'])]
    #[ORM\Column(enumType: AdoptionStatus::class)]
    private ?AdoptionStatus $adoptionStatus = null;

    #[Groups(['animal:read'])]
    #[ORM\Column(type: 'json')]
    private array $breed = [];

    #[Groups(['animal:read'])]
    #[ORM\Column(enumType: Type::class)]
    private ?Type $type = null;

    #[Groups(['animal:read'])]
    #[ORM\Column(length: 255)]
    private ?string $thumbnail = null;

    #[Groups(['animal:read'])]
    #[ORM\Column(type: 'json')]
    private $images = [];

    #[Groups(['animal:read'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[Groups(['animal:read'])]
    #[ORM\Column]
    private ?bool $isVisible = null;


    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt;


    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt;

    #[ORM\Column]
    private ?bool $isActive = null;

    // --- Getters and Setters ---

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

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(?Gender $gender): self
    {
        $this->gender = $gender;

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

    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    public function setStructure(?Structure $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function isOutDepartment(): ?bool
    {
        return $this->outDepartment;
    }

    public function setOutDepartment(bool $outDepartment): self
    {
        $this->outDepartment = $outDepartment;

        return $this;
    }

    public function isHighlight(): ?bool
    {
        return $this->highlight;
    }

    public function setHighlight(bool $highlight): self
    {
        $this->highlight = $highlight;

        return $this;
    }

    public function getSize(): ?Size
    {
        return $this->size;
    }

    public function setSize(?Size $size): self
    {
        // Si une chaîne est fournie au lieu d'une Enum, on la convertit en instance de l'Enum
        if (is_string($size)) {
            $size = Size::from($size); // Convertir chaîne -> Enum (throw si invalide)
        }

        // Assigner l'instance (ou null) à la propriété
        $this->size = $size;

        return $this;
    }

    public function getColor(): ?Color
    {
        return $this->color;
    }

    public function setColor(?Color $color): self
    {
        if (is_string($color)) {
            $size = Color::from($color); // Convertir chaîne -> Enum (throw si invalide)
        }

        // Assigner l'instance (ou null) à la propriété
        $this->color = $color;

        return $this;
    }

    /**
     * @return Affinity[]
     */
    public function getAffinity(): array
    {
        // Transforme les valeurs en instances d'Affinity
        return array_map(fn(string $value) => Affinity::from($value), $this->affinity);
    }

    public function setAffinity(array $affinity): self
    {
        // Convertit les instances d'Affinity en leurs valeurs pour stockage en BDD
        $this->affinity = array_map(fn(Affinity $enum) => $enum->value, $affinity);

        return $this;
    }

    public function getAdoptionStatus(): ?AdoptionStatus
    {
        return $this->adoptionStatus;
    }

    public function setAdoptionStatus(?AdoptionStatus $adoptionStatus): self
    {
        if (is_string($adoptionStatus)) {
            $adoptionStatus = AdoptionStatus::from($adoptionStatus); // Convertir chaîne -> Enum (throw si invalide)
        }

        // Assigner l'instance (ou null) à la propriété
        $this->adoptionStatus = $adoptionStatus;

        return $this;
    }

    /**
     * @return Breed[]
     */
    public function getBreed(): array
    {
        // Transforme les valeurs en instances de Breed
        // dd($this->breed);
        return array_map(fn(string $value) => Breed::from($value), $this->breed);
    }

    public function setBreed(array $breed): self
    {
        // Convertit les instances de Breed en leurs valeurs pour stockage en BDD
        $this->breed = array_map(function ($enumOrString) {
            if (is_string($enumOrString)) {
                return Breed::from($enumOrString); // Convertit une chaîne en Breed
            }

            if ($enumOrString instanceof Breed) {
                return $enumOrString->value; // Conserve la valeur de l'instance
            }

            throw new \InvalidArgumentException('Invalid breed specified.');
        }, $breed);

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        if (is_string($type)) {
            $type = Type::from($type); // Convertir chaîne -> Enum (throw si invalide)
        }

        // Assigner l'instance (ou null) à la propriété
        $this->type = $type;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(string $thumbnail): static
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }


    public function getImages(): array
    {

        // Transforme les valeurs en instances d'Affinity
        return $this->images;
    }

    public function setImages(array $image): self
    {
        //todo renvoyer le tableau des images
        $this->images = $image;


        return $this;
    }

    // Propriété temporaire pour les fichiers

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function isVisible(): ?bool
    {
        return $this->isVisible;
    }

    public function setIsVisible(bool $isVisible): static
    {
        $this->isVisible = $isVisible;

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

    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function __toString(): string
    {
        return $this->name ?? '';
    }
}
