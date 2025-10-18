<?php

namespace App\Controller;



use App\Entity\Structure;
use App\Service\LocationService;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\RequestCreateStructureFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\AutocompleteService;
use App\Repository\StructureRepository;

use function PHPUnit\Framework\isEmpty;

final class StructureController extends AbstractController
{


    public function __construct(
        private LocationService $locationService
        )
        {}


    #[Route('/structure', name: 'app_structure')]
    public function index(): Response
    {
        return $this->render('structure/index.html.twig', [
            'controller_name' => 'StructureController',
        ]);
    }

    #[Route('/demande-creation-struture', name: 'app_create_structure')]
    public function createStructureRequest(Request $request, EntityManagerInterface $entityManager): Response
    {
        $structure = new Structure();
        $form = $this->createForm(RequestCreateStructureFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $structure = $form->getData();
            $structure->setCreatedAt(new \DateTimeImmutable());
            $structure->setUpdatedAt(new \DateTimeImmutable());
            $structure->setIsActive(false);
            $this->locationService->getCoordinates($structure);
            try {
                $entityManager->persist($structure);
                $entityManager->flush();
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Cette structure existe déjà. Veuillez en choisir une autre.');
            }
            return $this->redirectToRoute('app_create_structure');
        }
        return $this->render('structure/create_structure.html.twig', [
            'controller_name' => 'StructureController',
            'form' => $form->createView(),
        ]);
    }

    #[Route('api/autocomplete', name: 'app_autocomplete')]
    public function autocomplete(Request $request, AutocompleteService $autocompleteService): Response
    {
        $option = $request->query->get('option');
        $name = $request->query->get('name');
        $departement = $request->query->get('departement');
        $region = $request->query->get('region');


        if (!$option) {
            return $this->json(['message' => 'Le paramètre "option" est requis'], Response::HTTP_BAD_REQUEST);
        }
        if (!in_array($option, ['communes', 'departements', 'regions'])) {
            return $this->json(['message' => 'Le paramètre "option" doit être l\'un des suivants : communes, departements, regions'], Response::HTTP_BAD_REQUEST);
        }


        $results = $autocompleteService->autocomplete($option, $name, $departement, $region);
        if (empty($results)) {
            return $this->json(['message' => 'Aucun résultat trouvé'], Response::HTTP_OK);
        }
        return $this->json($results, Response::HTTP_OK);
    }

    #[Route('api/filtersResults', name: "structure_filters_results", methods:['GET'])]
    public function  getFiltersResults(request $request, StructureRepository $structureRepository) {
        $data = $request->query->all();
        $response = $structureRepository->findByFilters($data);

        if(isEmpty($response)) {
        return $this->json([
            'message' => 'display filters structures result',
            'timestamp' => time(),
            'structure' => $response,
        ], 200, [], ['groups' => 'structure:read']);
        }

        dd($request);
    }


}
