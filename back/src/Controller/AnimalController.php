<?php

namespace App\Controller;
use App\Enum\AdoptionStatus;
use App\Enum\Affinity;
use App\Enum\Breed;
use App\Enum\Color;
use App\Enum\Gender;
use App\Enum\Size;
use App\Enum\Type;
use App\Entity\Animal;
use App\Form\AnimalType;
use App\Repository\AnimalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/animal', name: 'animal_index')]
final class AnimalController extends AbstractController
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

    #[Route('filtersList', name: 'api_animal_filtersList', methods: ['GET'])]
    public function filtersList(): Response
    {

        $enums = [
            'status d\'adoption' => $this->getEnumData(AdoptionStatus::class),
            'affinité' => $this->getEnumData(Affinity::class),
            'couleurs' => $this->getEnumData(Color::class),
            'races' => $this->getEnumData(Breed::class),
            'genres' => $this->getEnumData(Gender::class),
            'tailles' => $this->getEnumData(Size::class),
            'types' => $this->getEnumData(Type::class),
        ];
        
        return $this->json($enums);
    }
    
    private function getEnumData(string $enumClass): array
    {
        return array_map(function($case) {
            $data = [
                'name' => $case->name,
                'value' => $case->value ?? $case->name,
            ];
            
            // Ajouter des méthodes personnalisées si elles existent
            if (method_exists($case, 'getLabel')) {
                $data['label'] = $case->getLabel();
            }
            
            return $data;
        }, $enumClass::cases());
    }
}
