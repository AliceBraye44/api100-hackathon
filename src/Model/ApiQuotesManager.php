<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class ApiQuotesManager
{
    private $client;
    private string $baseSource;

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function getDataFromQuotes(string $source)
    {
        $response = $this->client->request('GET', $source);
        $content = $response->getContent();

        return $content;
    }
}
