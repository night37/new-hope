<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ApiController extends AbstractController
{
    #[Route('/api/getAnimalsList',name: 'get_animals_list', methods: ['GET'])]
    public function index(AnimalRepository $animalRepository): Response
    {
        return $this->json([
            'message' => 'j\'toute la liste des animaux',
            'timestamp' => time(),
            'animals' => $animalRepository->findAll(),
        ]);
    }
}
