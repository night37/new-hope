<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;


class LocationService
{

  private $url;
  private $client;
 
  public function __construct(HttpClientInterface $client)
  {
    
    $this->client = $client;
    $this->url = $_ENV['APP_GEOLOCATION_URL'];
    $this->client = $client;

  }

  public function getCoordinates($entityInstance)
  {
    $street = str_replace(' ', '+', $entityInstance->getStreet());
    $city = $entityInstance->getCity();

    
    $query = $this->url."/search/?q=".$street."&city=".$city;
    $response = $this->client->request('GET', $query);
    $data = $response->toArray();
    $coordinates = $data['features'][0]['geometry']['coordinates'];
    $entityInstance->setLatitude($coordinates[1]);
    $entityInstance->setLongitude($coordinates[0]);
   ;

  }
}