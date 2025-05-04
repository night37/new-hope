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


#[ORM\Entity(repositoryClass: AnimalRepository::class)]
#[Vich\Uploadable]
#[ApiResource(
    normalizationContext: ['groups' => ['animal:read']],
    operations: [
        new Get(),
        new GetCollection()

    ]
    
)]
class Animal
{

    private ?\DateTimeInterface $created_at = null;

    public function __construct()
    {
        $this->created_at = new \DateTime();
        
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
    private ?Structure $structure_id = null;

    #[Groups(['animal:read'])]
    #[ORM\Column]
    private ?bool $out_department = null;

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
    private ?AdoptionStatus $adoption_status = null;

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
    private ?\DateTimeImmutable $createdAt ;


    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt;

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

    public function getStructureId(): ?Structure
    {
        return $this->structure_id;
    }

    public function setStructureId(?Structure $structure_id): self
    {
        $this->structure_id = $structure_id;
       

        return $this;
    }

    public function isOutDepartment(): ?bool
    {
        return $this->out_department;
    }

    public function setOutDepartment(bool $out_department): self
    {
        $this->out_department = $out_department;

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
        return array_map(fn (string $value) => Affinity::from($value), $this->affinity);
    }

    public function setAffinity(array $affinity): self
    {
        // Convertit les instances d'Affinity en leurs valeurs pour stockage en BDD
        $this->affinity = array_map(fn (Affinity $enum) => $enum->value, $affinity);

        return $this;
    }

    public function getAdoptionStatus(): ?AdoptionStatus
    {
        return $this->adoption_status;
    }

    public function setAdoptionStatus(?AdoptionStatus $adoption_status): self
    {
        if (is_string($adoption_status)) {
            $adoption_status = AdoptionStatus::from($adoption_status); // Convertir chaîne -> Enum (throw si invalide)
        }

    // Assigner l'instance (ou null) à la propriété
        $this->adoption_status = $adoption_status;

        return $this;
    }

    /**
     * @return Breed[]
     */
    public function getBreed(): array
    {
        // Transforme les valeurs en instances de Breed
        // dd($this->breed);
        return array_map(fn (string $value) => Breed::from($value), $this->breed);
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
}
