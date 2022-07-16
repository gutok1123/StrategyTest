<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Client\PendingRequest;

class HttpClientService {
    protected $http;

    public function __construct(PendingRequest $http)
    {
        $this->http = $http;
    }

    public function post(string $url, array $data = [], array $headers = [])
    {
        return $this->processResult(
            $this->http->post($url, $data, $headers)
        );
    }

    private function processResult(Response $response)
    {
        if ($response->successful()) {
            $result = $response->object();

            if(isset($result->statusCode))
                throw new \Exception($response->body());
    
            return $result;
        }

        throw new \Exception($response->body());
    }

}
