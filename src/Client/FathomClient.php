<?php

namespace Ismaelillodev\FathomAnalytics\Client;

use GuzzleHttp\Client;
use Ismaelillodev\FathomAnalytics\Contracts\FathomRequest;

class FathomClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = $this->client = new Client([
            'base_uri' => 'https://api.usefathom.com',
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.config('fathom-analytics.access_token'),
            ],
        ]);
    }

    public function send(FathomRequest $request)
    {
        $options = $this->getOptions($request);
        $response = $this->client->request($request->getMethod(), $request->getUri(), $options);

        return json_decode($response->getBody()->getContents(), true);
    }

    private function getOptions(FathomRequest $request): array
    {
        $options = [];

        if ($request->getQueryParams()) {
            $options['query'] = $request->getQueryParams();
        }

        if ($request->getBody()) {
            $options['body'] = json_encode($request->getBody());
        }

        return $options;

    }
}
