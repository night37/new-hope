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
    public function filtersList(): Response
    {
        $animalFilterDTO = new AnimalFilterDTO();

        
        return $this->json($animalFilterDTO->enums);

    }

    #[Route('filtersResults', name:'api_animal_filters_results', methods:['GET'])]
    public function filtersResults(Request $request, AnimalRepository $animalRepository): Response
    {   
        $data = $request->query->all() ;

        return $this->json([
            'message' => 'display filters animals result',
            'timestamp' => time(),
            'animals' => $animalRepository-> findByFilters($data),
        ]);
       
    }
    
    
}
