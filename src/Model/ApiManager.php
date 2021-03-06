<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class ApiManager
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
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'

        return $content = $response->toArray();
    }
}
