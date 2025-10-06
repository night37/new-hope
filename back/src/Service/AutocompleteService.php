<?php
namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class AutocompleteService
{
    private $url;
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->url = $_ENV['AUTOCOMPLETE_API_BASE_URL'];
    }

    public function autocomplete (string $option, ?string $param) : array {
        $query = $this->url . "/$option";
        if ($param) {
            $query .= "?nom=$param";
        }
        $response = $this->client->request('GET', $query);
        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Erreur lors de la requête d\'autocomplétion');
        }
        $data = [];
        foreach ($response->toArray() as $key => $value) {
            if($option === "communes") {
                array_push($data,
                    [
                        "name" => $value["nom"],
                        "code" => $value["code"]
                    ]
                );
            }
        }
        return $data;
    }
}