<?php
namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class AutocompleteService
{
    private $geoApiUrl;
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->geoApiUrl = $_ENV['AUTOCOMPLETE_API_BASE_URL'];
    }

    public function autocomplete (string $option, ?string $name, ?string $departement, ?string $region) : array {
        $query = $this->geoApiUrl . "/$option?";
        if ($name ) {
            $query .= "nom=$name";
        }
        $query .= "&limit=500&boost=population";

        if ($region) {
            $query .= "&codeRegion=$region";
            // $query .= "&code=$region";
        }
        if ($departement) {
            $query .= "&codeDepartement=$departement";
            // $query .= "&code=$departement";
        }
        $response = $this->client->request('GET', $query);
        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Erreur lors de la requête d\'autocomplétion');
        };
        $data = [];
        foreach ($response->toArray() as $key => $value) {
            $newData = [];
            $newData["name"] = $value["nom"];
            $newData["code"] = $value["code"];
            if($option == 'communes'){
                $newData["codeDepartement"] = $value["codeDepartement"];
                $newData["codeRegion"] = $value["codeRegion"];
            }
            if($option == 'departements'){
                $newData["codeRegion"] = $value["codeRegion"];
            }
            array_push($data, $newData);
        }
        return $data;
    }
}