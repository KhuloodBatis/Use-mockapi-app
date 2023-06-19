<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Lichtner\MockApi\MockApi;

class HttpMock
{
    public static function get($url): Response
    {
        MockApi::init($url);

        $response = Http::get($url);

        MockApi::log($url, $response);

        return $response;
    }


    /* ... here is function get() */

    public static function post(string $url, array $data): Response
    {
        MockApi::init($url, $data, 'POST');

        $response = Http::post($url, $data);

        MockApi::log($url, $response, 'POST');

        return $response;
    }

}
