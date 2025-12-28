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

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class StructureController extends AbstractController
{


    public function __construct(
        private LocationService $locationService,
        private EmailService $emailService,
        private FlashMessageService $flashMessageService,
        private StructureRepository $structureRepository
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

            $structure = $form->getData();
            $structure->setCreatedAt(new \DateTimeImmutable());
            $structure->setUpdatedAt(new \DateTimeImmutable());
            $structure->setIsActive(false);
            $structure->setIsVerified(false);
            $structure->setPassword(password_hash($structure->getPassword(), PASSWORD_DEFAULT));

            $this->locationService->getCoordinates($structure);
            try {
                $entityManager->persist($structure);
                $entityManager->flush();

                $this->emailService->sendEmailConfirmation($structure, false);
                $this->flashMessageService->displayMessage('success', 'Votre compte a été crée avec succès. Un email de confirmation vous a été envoyé. Veuillez vérifier votre boîte de réception.');
            } catch (UniqueConstraintViolationException $e) {
                $this->flashMessageService->displayMessage('error', 'Une erreur est survenue lors de la création de la structure.');
            }
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
        $response = $this->structureRepository->getAllStructures();

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
}
