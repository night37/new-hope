<?php

namespace App\Service;

use App\Repository\AnimalRepository;


class AnimalService
{

    public function __construct(private readonly AnimalRepository $animalRepository) {}


    public function getRandomAnimals(): array
    {

        $dogsList = $this->animalRepository->getRandomLastAnimals("chien");
        if (!$dogsList) {
            $dogsList = [];
        }

        foreach ($dogsList as $key => $value) {
            $dogsList[$key]['structure'] = [
                'name' => $value['structureName']
            ];
            unset($dogsList[$key]['structureName']);
        }

        $catsList = $this->animalRepository->getRandomLastAnimals("chat");
        if (! $catsList) {
            $catsList = [];
        }
        foreach ($catsList as $key => $value) {
            $catsList[$key]['structure'] = [
                'name' => $value['structureName']
            ];
            unset($catsList[$key]['structureName']);
        }

        return array_merge($dogsList, $catsList);
    }

    public function getAllAnimals(): array
    {
        return $this->animalRepository->findAll();
    }
}
