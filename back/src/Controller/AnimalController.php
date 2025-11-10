<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Form\AnimalType;
use App\Repository\AnimalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\DTO\Request\Animal\AnimalFilterDTO;
use App\Service\AnimalService;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;



#[Route('/animal', name: 'animal_index')]
final class AnimalController extends AbstractController
{

    public function __construct(
        private readonly AnimalService $animalService,
        private readonly AnimalRepository $animalRepository,
        private readonly EntityManagerInterface $entityManagerInterface,
        private SerializerInterface $serializer

    ) {}


    #[Route('/api/animal/getAnimalsList', name: 'get_animals_list', methods: ['GET'], priority: 10)]
    public function index(): Response
    {

        return $this->json([
            'message' => 'display all animals',
            'timestamp' => time(),
            'animals' => $this->animalRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_animal_show', methods: ['GET'])]
    public function show(Animal $animal): Response
    {
        return $this->render('animal/show.html.twig', [
            'animal' => $animal,
        ]);
    }


    #[Route('/{id}', name: 'app_animal_delete', methods: ['POST'])]
    public function delete(Animal $animal): Response
    {

        $this->entityManagerInterface->remove($animal);
        $this->entityManagerInterface->flush();

        return $this->redirectToRoute('app_animal_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('filters', name: 'api_animal_filters', methods: ['GET'])]
    public function getFiltersList(): Response
    {
        $animalFilterDTO = new AnimalFilterDTO();
        return $this->json($animalFilterDTO->enums);
    }

    #[Route('filtersResults', name: 'api_animal_filters_results', methods: ['GET'])]
    public function getFiltersResults(Request $request): Response
    {
        $data = $request->query->all();
        $response = $this->animalRepository->findByFilters($data);
        foreach ($response['data'] as $key => $value) {
            $response['data'][$key]['structure'] = [
                'name' => $value['structureName']
            ];
            unset($response['data'][$key]['structureName']);
        }

        return $this->json([
            'message' => 'display filters animals result',
            'timestamp' => time(),
            'animals' => $response,
        ]);
    }

    #[Route('getRandomLastAnimals', name: 'api_get_random_last_animals', methods: ['GET'])]
    public function getRandomLastAnimals(): Response
    {

        return $this->json([
            'message' => 'display filters animals result',
            'timestamp' => time(),
            'animals' => $this->animalService->getRandomAnimals(),
        ], 200, [], ['groups' => 'animal:read']);
    }

    #[Route('findById', name: 'api_find_by_id', methods: ['GET'])]
    public function findById(Request $request): Response
    {

        $data = $request->query->all();
        if (!isset($data["id"]) || empty($data["id"])) {
            return $this->json([
                'message' => 'id is required',
                'timestamp' => time(),
            ], 400, [], ['groups' => 'animal:read']);
        }

        $animal = $this->animalRepository->findById($data["id"]);

        if (!$animal) {
            return $this->json([
                'message' => 'Animal not found',
                'timestamp' => time(),
            ], 200, [], ['groups' => 'animal:read']);
        }

        return $this->json([
            'message' => 'display find result for id',
            'timestamp' => time(),
            'animal' => $animal[0],
        ], 200, [], ['groups' => 'animal:read']);
    }
}
