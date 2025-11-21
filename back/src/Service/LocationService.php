<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class LocationService
{
    private $coordinateUrl;
    private $geoApiUrl;
    private $client;
    private $requestStack;
    private $logger;

    public function __construct(
        HttpClientInterface $client,
        ?RequestStack $requestStack = null,
        ?LoggerInterface $logger = null
    ) {
        $this->client = $client;
        $this->coordinateUrl = $_ENV['GEOLOCATION_URL'];
        $this->geoApiUrl = $_ENV['AUTOCOMPLETE_API_BASE_URL'];
        $this->requestStack = $requestStack;
        $this->logger = $logger;
    }

    public function getCoordinates($entityInstance)
    {
        $street = str_replace(' ', '+', $entityInstance->getStreet());
        $city = $entityInstance->getCity();

        try {
            $query = $this->coordinateUrl . "/search/?q=" . $street . "&city=" . $city;
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

    public function getDepartement(string $param) {
        $query = $this->geoApiUrl.'/regions/'.$param.'/departements';
        $response = $this->client->request('GET', $query);
        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Erreur lors de la requête de récuperation des départements');
        };
        dd($response->toArray());


    }

    public function getCity(string $param) {
        
    }

}
