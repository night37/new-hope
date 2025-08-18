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
}
