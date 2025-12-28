<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use App\Service\FlashMessageService;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class LocationService
{

    public function __construct(
        private string $geoApiUrl,
        private string $coordinateUrl,
        private FlashMessageService $flashMessageService,
        private HttpClientInterface $client,
        private ?RequestStack $requestStack = null,
        private ?LoggerInterface $logger = null,
    ) {}

    public function getCoordinates($entityInstance): bool
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

    private function logError(string $message): void
    {
        if ($this->requestStack) {
            $this->flashMessageService->displayMessage('danger', 'Erreur lors de la récupération des coordonnées géographiques. Veuillez vérifier l\'adresse saisie.');
        }
        if ($this->logger) {
            $this->logger->error($message);
        }
    }

    public function getDepartement(string $param): array
    {
        $query = $this->geoApiUrl . '/regions/' . $param . '/departements';
        $response = $this->client->request('GET', $query);
        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Erreur lors de la requête de récuperation des départements');
        };
        return $response->toArray();
    }
}
