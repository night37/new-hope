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
            'status d\'adoption' => [
                'field_name' => 'AdoptionStatus',
                'data' => $this->getEnumData(AdoptionStatus::class),
            ], 
            'affinité' =>  [
                'field_name' => 'Affinity',
                'data' =>$this->getEnumData(Affinity::class)
            ],
            'couleurs' =>  [
                'field_name' => 'Color',
                'data' =>$this->getEnumData(Color::class)
            ],
            'races' =>  [
                'field_name' => 'Breed',
                'data' =>$this->getEnumData(Breed::class)
            ],
            'genres' =>  [
                'field_name' => 'Gender',
                'data' =>$this->getEnumData(Gender::class)
            ],
            'tailles' =>  [
                'field_name' => 'Size',
                'data' =>$this->getEnumData(Size::class)
            ],
            'types' =>  [
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
