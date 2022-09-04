<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompagnonController extends AbstractController
{
    #[Route('/compagnon', name: 'app_compagnon')]
    public function index(): Response
    {
        return $this->render('compagnon/index.html.twig', [
            'controller_name' => 'CompagnonController',
        ]);
    }
}
