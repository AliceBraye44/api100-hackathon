<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class ApiManager
{
    private $client;

    public function getDataFromQuotes(string $url)
    {
        $response = $this->client->request('GET', $url);

        $statusCode = $response->getStatusCode();

        $contentType = $response->getHeaders()['content-type'][0];

        $content = $response->getContent();

        return $content = $response->toArray();
    }
}
