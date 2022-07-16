<?php

namespace App\Services;

use App\Services\HttpClientService;

class DispatchApiService{
    protected $http;

    public function __construct(HttpClientService $http)
    {
        $this->http = $http;
    }

    public function sendToApi(array $data)
    {
        $result =  $this->http->post('http://localhost:4000/api/new-products',$data);
        dd($result);
       //return $response;
    }
}
