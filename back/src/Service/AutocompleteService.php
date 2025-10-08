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

    public function autocomplete (string $option, ?string $name ) : array {
        $query = $this->url . "/$option?";
        if ($name) {
            $query .= "nom=$name";
        }
<<<<<<< HEAD
        $query .="&limit=10";
=======
        $query .= "&limit=20";
>>>>>>> 627bc2c240d64c72422492fa0a5ee600dd69589c
        $response = $this->client->request('GET', $query);
        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Erreur lors de la requête d\'autocomplétion');
        }
     ;
        $data = [];
        foreach ($response->toArray() as $key => $value) {
<<<<<<< HEAD
                array_push($data,
                    [
                        "name" => $value["nom"],
                        "code" => $value["code"]
                    ]
                );
                if($option === "departements") {
                    array_push($data,["codeRegion" => $value["codeRegion"]]
                    );
                }
                if($option === "communes") {
                    array_push($data,
                    [
                        "codeRegion" => $value["codeRegion"],
                        "codeDepartement" => $value["codeDepartement"]
                        ]
                    );
                }
        }
=======
            $data["name"] = $value["nom"];
            $data["code"] = $value["code"];
            if($option == 'communes'){
                $data["codeDepartement"] = $value["codeDepartement"];
                $data["codeRegion"] = $value["codeRegion"];
            }
            if($option == 'departements'){
                $data["codeRegion"] = $value["codeRegion"];                
            }        }
>>>>>>> 627bc2c240d64c72422492fa0a5ee600dd69589c
        return $data;
    }
}