<?php

namespace App\Controller;

use App\Model\ApiManager;
use App\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;


class ApiController extends AbstractController
{

    public function __construct()
    {
        $this->client = HttpClient::create();
        // $this->basesource = "";
    }

    public function getDataFromQuotes()
    {
        $apiManager = new ApiManager();
        // $quotes = $apiManager->selectAll();

        // return $this->twig->render('Home/game.html.twig');
    }
}
