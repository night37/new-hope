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
            'affinité' =>  [
                'field_name' => 'Affinity',
                'data' =>$this->getEnumData(Affinity::class)
            ],
            'couleur' =>  [
                'field_name' => 'Color',
                'data' =>$this->getEnumData(Color::class)
            ],
            'race' =>  [
                'field_name' => 'Breed',
                'data' =>$this->getEnumData(Breed::class)
            ],
            'genre' =>  [
                'field_name' => 'Gender',
                'data' =>$this->getEnumData(Gender::class)
            ],
            'taille' =>  [
                'field_name' => 'Size',
                'data' =>$this->getEnumData(Size::class)
            ],
            'type' =>  [
                'field_name' => 'Type',
                'data' =>$this->getEnumData(Type::class)
            ],
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
