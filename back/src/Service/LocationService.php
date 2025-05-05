<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class LocationService
{
    private $url;
    private $client;
    private $requestStack;
    private $logger;
 
    public function __construct(
        HttpClientInterface $client, 
        ?RequestStack $requestStack = null, 
        ?LoggerInterface $logger = null
    ) {
        $this->client = $client;
        $this->url = $_ENV['APP_GEOLOCATION_URL'];
        $this->requestStack = $requestStack;
        $this->logger = $logger;
    }

    public function getCoordinates($entityInstance)
    {
        $street = str_replace(' ', '+', $entityInstance->getStreet());
        $city = $entityInstance->getCity();

        try {
            $query = $this->url . "/search/?q=" . $street . "&city=" . $city;
            $response = $this->client->request('GET', $query);
            $data = $response->toArray();
            
            if (!empty($data['features'])) {
                $coordinates = $data['features'][0]['geometry']['coordinates'];
                $entityInstance->setLatitude($coordinates[1]);
                $entityInstance->setLongitude($coordinates[0]);
                return true;
            } else {
                $this->logError('Aucune coordonnée trouvée pour cette adresse.');
                return false;
            }
        } catch (\Exception $e) {
            $this->logError('Erreur lors de la récupération des coordonnées: ' . $e->getMessage());
            return false;
        }
    }

    private function logError($message)
    {
        if ($this->requestStack) {
            $session = $this->requestStack->getSession();
            $session->getFlashBag()->add('danger', 'Erreur lors de la récupération des coordonnées géographiques. Veuillez vérifier l\'adresse saisie.');
        }
        
        if ($this->logger) {
            $this->logger->error($message);
        }
    }
}
