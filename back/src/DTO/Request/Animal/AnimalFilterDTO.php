<?php

namespace App\DTO\Request\Animal;

use App\Enum\Size;
use App\Enum\Type;
use App\Enum\Breed;
use App\Enum\Color;
use App\Enum\Gender;
use App\Enum\Affinity;
use App\Enum\AdoptionStatus;

final class AnimalFilterDTO
{
    public readonly array $enums;

    public function __construct()
    {
        $this->enums = [
            "status d'adoption" => $this->getEnumData(AdoptionStatus::class),
            'affinité'          => $this->getEnumData(Affinity::class),
            'couleurs'          => $this->getEnumData(Color::class),
            'races'             => $this->getEnumData(Breed::class),
            'genres'            => $this->getEnumData(Gender::class),
            'tailles'           => $this->getEnumData(Size::class),
            'types'             => $this->getEnumData(Type::class),
        ];
    }

    private function getEnumData(string $enumClass): array
    {
        return array_map(function ($case) {
            $data = [
                'name'  => $case->name,
                'value' => $case->value ?? $case->name,
            ];
            if (method_exists($case, 'getLabel')) {
                $data['label'] = $case->getLabel();
            }
            return $data;
        }, $enumClass::cases());
    }
}
