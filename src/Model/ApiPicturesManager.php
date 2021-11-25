<?php

// namespace App\Model;

// use Symfony\Component\HttpClient\HttpClient;

// class ApiPicturesManager
// {
//     private $client;
//     private string $baseSource;

//     public function __construct()
//     {
//         $this->client = HttpClient::create();
//         $this->baseSource = "https://imsea.herokuapp.com/api/1?q=britneyspears";
//     }

//     /**
//      * Récupère des données depuis une source
//      *
//      * @param string $source
//      * @return array
//      */

//     public function getDataFromPictures(string $source)
//     {
//         $response = $this->client->request('GET', $source);
//         $content = $response->getContent();

//         return json_decode($content);
//     }

//     /**
//      * Génère aléatoirement 6 images de l'API
//      *
//      * @return array
//      */

//     public function getPictures(): array
//     {
//         $allPictures = $this->getDataFromPictures("{$this->baseSource}");
//         $picturesRand = array_rand($allPictures, 6);
//         $sixPictures = $allPictures[$picturesRand[array_rand($picturesRand)]];

//         return [
//             'sixPictures' => $sixPictures
//         ];
//     }
// }
