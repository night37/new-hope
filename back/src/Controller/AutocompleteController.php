<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\AutocompleteService;

final class AutocompleteController extends AbstractController
{
    #[Route('api/autocomplete', name: 'app_autocomplete')]
    public function index(Request $request, AutocompleteService $autocompleteService): Response
    {
        $option = $request->query->get('option');
        $param = $request->query->get('param');

        $results = $autocompleteService->autocomplete($option, $param);

        return $this->json($results);
    }
}
