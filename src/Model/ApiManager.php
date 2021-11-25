<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class Api
{
    private $client;

    public function __construct()
    {
        $this->client = HttpClient::create();

    }

    public function getDataFrom(string $url)
    {
        $response = $this->client->request('GET', $url);

        $statusCode = $response->getStatusCode();

        $contentType = $response->getHeaders()['content-type'][0];

        $content = $response->getContent();

        return $content = $response->toArray();

    }
}