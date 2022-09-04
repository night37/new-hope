<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AnimalRepository;
use App\Entity\Animal;
use App\Form\AnimalType;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index( AnimalRepository $animalRepository): Response
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
        return $this->render('home/index.html.twig',[
            "getAnimalForm" => $form->createView() 
        ]);
    }
}
