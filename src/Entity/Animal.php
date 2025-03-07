<?php

namespace App\Entity;

use App\Enum\AdoptionStatus;
use App\Enum\Affinity;
use App\Enum\Gender;
use App\Enum\Race;
use App\Enum\Size;
use App\Enum\Type;
use App\Enum\Color;
use App\Repository\AnimalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, enumType: Gender::class)]
    private array $gender = [];

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Structure $structure_id = null;

    #[ORM\Column]
    private ?bool $out_department = null;

    #[ORM\Column]
    private ?bool $highlight = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, enumType: Size::class)]
    private array $size = [];

    #[ORM\Column(enumType: Color::class)]
    private ?Color $color = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, enumType: Race::class)]
    private array $race = [];

    #[ORM\Column(type: Types::SIMPLE_ARRAY, enumType: Affinity::class)]
    private array $affinity = [];

    #[ORM\Column(enumType: AdoptionStatus::class)]
    private ?AdoptionStatus $adoption_status = null;

    #[ORM\Column(enumType: Type::class)]
    private ?Type $type = null;

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Gender[]
     */
    public function getGender(): array
    {
        return $this->gender;
    }

    public function setGender(array $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getStructureId(): ?Structure
    {
        return $this->structure_id;
    }

    public function setStructureId(?Structure $structure_id): static
    {
        $this->structure_id = $structure_id;

        return $this;
    }

    public function isOutDepartment(): ?bool
    {
        return $this->out_department;
    }

    public function setOutDepartment(bool $out_department): static
    {
        $this->out_department = $out_department;

        return $this;
    }

    public function isHighlight(): ?bool
    {
        return $this->highlight;
    }

    public function setHighlight(bool $highlight): static
    {
        $this->highlight = $highlight;

        return $this;
    }

    /**
     * @return Size[]
     */
    public function getSize(): array
    {
        return $this->size;
    }

    public function setSize(array $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getColor(): ?Color
    {
        return $this->color;
    }

    public function setColor(Color $color): static
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Race[]
     */
    public function getRace(): array
    {
        return $this->race;
    }

    public function setRace(array $race): static
    {
        $this->race = $race;

        return $this;
    }

    /**
     * @return Affinity[]
     */
    public function getAffinity(): array
    {
        return $this->affinity;
    }

    public function setAffinity(array $affinity): static
    {
        $this->affinity = $affinity;

        return $this;
    }

    public function getAdoptionStatus(): ?AdoptionStatus
    {
        return $this->adoption_status;
    }

    public function setAdoptionStatus(AdoptionStatus $adoption_status): static
    {
        $this->adoption_status = $adoption_status;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(Type $type): static
    {
        $this->type = $type;

        return $this;
    }
}
