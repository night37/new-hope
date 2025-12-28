<?php

namespace App\Controller;



use App\Entity\Structure;
use App\Form\StructureType;
use App\Service\EmailService;
use App\Service\LocationService;
use App\Service\AutocompleteService;
use App\Repository\StructureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\FlashMessageService;
use App\Service\StructureService;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class StructureController extends AbstractController
{


    public function __construct(
        private LocationService $locationService,
        private EmailService $emailService,
        private FlashMessageService $flashMessageService,
        private StructureService $structureService,
        private EntityManagerInterface $em,
    ) {}


    #[Route('/structure', name: 'app_structure')]
    public function index(): Response
    {
        return $this->render('structure/index.html.twig', [
            'controller_name' => 'StructureController',
        ]);
    }

    #[Route('/demande-creation-structure', name: 'app_create_structure')]
    public function createStructureRequest(Request $request, EntityManagerInterface $entityManager): Response
    {
        $structure = new Structure();
        $form = $this->createForm(StructureType::class, $structure);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $structureData = $form->getData();
            $this->structureService->createStructure($structureData);

            return $this->redirectToRoute('app_login');
        }
        return $this->render('structure/create_structure.html.twig', [
            'form' => $form
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

    #[Route('api/getAllStructures', name: "api_structure_get_all_structures", methods: ['GET'])]
    public function  getAllStructures(): Response
    {
        $response = $this->structureService->getAllStructures();

        if (!$response) {
            return $this->json([
                'message' => 'Aucune structure trouvée',
                'timestamp' => time(),
                'structure' => [],
            ], 200, [], ['groups' => 'structure:read']);
        }
        return $this->json([
            'message' => 'display filters structures result',
            'timestamp' => time(),
            'structure' => $response,
        ], 200, [], ['groups' => 'structure:read']);
    }

    #[Route('/verify/structure-email', name: 'app_verify_structure_email')]
    public function verifyUserEmail(Request $request): Response
    {
        $this->structureService->activeStructure();

        return $this->redirectToRoute('app_login');
    }
}
