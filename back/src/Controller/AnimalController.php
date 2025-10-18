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



#[Route('/animal', name: 'animal_index')]
final class AnimalController extends AbstractController
{
    #[Route('/api/animal/getAnimalsList',name: 'get_animals_list', methods: ['GET'], priority:10)]
    public function index(AnimalRepository $animalRepository): Response
    {
      
        return $this->json([
                'message' => 'display all animals',
                'timestamp' => time(),
                'animals' => $animalRepository->findAll(),
            ]);
    
    }
    #[Route('/new', name: 'app_animal_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {

        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);
  
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($animal);
            $entityManager->flush();

            return $this->redirectToRoute('app_animal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('animal/new.html.twig', [
            'animal' => $animal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_animal_show', methods: ['GET'])]
    public function show(Animal $animal): Response
    {
        return $this->render('animal/show.html.twig', [
            'animal' => $animal,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_animal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_animal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('animal/edit.html.twig', [
            'animal' => $animal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_animal_delete', methods: ['POST'])]
    public function delete(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$animal->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($animal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_animal_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('filters', name: 'api_animal_filters', methods: ['GET'])]
    public function getFiltersList(): Response
    {
        $animalFilterDTO = new AnimalFilterDTO();
        return $this->json($animalFilterDTO->enums);

    }

    #[Route('filtersResults', name:'api_animal_filters_results', methods:['GET'])]
    public function getFiltersResults(Request $request, AnimalRepository $animalRepository): Response
    {
        $data = $request->query->all();
        $response = $animalRepository->findByFilters($data);
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

    #[Route('getRandomLastAnimals', name: 'api_get_random_last_animals', methods:['GET'])]
    public function getRandomLastAnimals(AnimalRepository $animalRepository): Response {
        $dogsList = $animalRepository-> getRandomLastAnimals("chien");
        if (!$dogsList) {
            $dogsList = [];
        }

        foreach ($dogsList as $key => $value) {
            $dogsList[$key]['structure'] = [
                'name' => $value['structureName']
            ];
            unset($dogsList[$key]['structureName']);
        }

        $catsList = $animalRepository-> getRandomLastAnimals("chat");
        if (! $catsList) {
            $catsList = [];
        }
        foreach ($catsList as $key => $value) {
            $catsList[$key]['structure'] = [
                'name' => $value['structureName']
            ];
            unset($catsList[$key]['structureName']);
        }
  
        return $this->json([
            'message' => 'display filters animals result',
            'timestamp' => time(),
            'animals' => array_merge($dogsList, $catsList),
        ], 200, [], ['groups' => 'animal:read']);

    }

    #[Route('findById', name:'api_find_by_id', methods:['GET'])]
    public function findById (Request $request, AnimalRepository $animalRepository): Response {

        $data = $request->query->all();
        if(!isset($data["id"]) || empty($data["id"]) ) {
            return $this->json([
                'message' => 'id is required',
                'timestamp' => time(),
            ], 400, [], ['groups' => 'animal:read']);
        }
        $animal = $animalRepository->findById($data["id"]);

        if (!empty($animal) && isset($animal[0])) {
            $animal[0]['structure'] = [
                'name' => $animal[0]['structureName'],
                'street' => $animal[0]['structureStreet'],
                'city' => $animal[0]['structureCity'],
                'zip_code' => $animal[0]['structureZipCode'],
                'phone' => $animal[0]['structurePhone'],
                'email' => $animal[0]['structureEmail'],
            ];
            unset($animal[0]['structureName']);
            unset($animal[0]['structureStreet']);
            unset($animal[0]['structureCity']);
            unset($animal[0]['structureZipCode']);
            unset($animal[0]['structurePhone']);
            unset($animal[0]['structureEmail']);
        }

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
