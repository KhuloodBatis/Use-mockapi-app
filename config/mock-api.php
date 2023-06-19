<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mock API use
    |--------------------------------------------------------------------------
    |
    | Turn on / off Mock API.
    |  - false - Http makes real request to external API and log them to mock_api tables
    |  - true - Http makes fake request and returns mock data from mock_api tables
    */

    'mock' => env('MOCK_API', false),

    /*
    |--------------------------------------------------------------------------
    | Mock API status is less than
    |--------------------------------------------------------------------------
    |
    | 300 means return mocked request with status code less than 300 (200-299)
    */

    'status' => env('MOCK_API_STATUS', 300),

    /*
    |--------------------------------------------------------------------------
    | Mock API environment
    |--------------------------------------------------------------------------
    |
    | Use Mock API only on this environment
    */

    'env' => env('MOCK_API_ENV', 'local'),


    'endpoints' => [
        'https://64900c891e6aa71680ca6cbf.mockapi.io/api/v1/posts' => [
            'response' => [
                'status' => 200,
                'headers' => [],
                'body' => '[
                    {
                        "name": "name 1",
                        "avatar": "avatar 1",
                        "mobile": "mobile 1",
                        "Created_at": "7339",
                        "id": "1"
                    },
                    {
                        "name": "name 2",
                        "avatar": "avatar 2",
                        "mobile": "mobile 2",
                        "Created_at": "854",
                        "id": "2"
                    }
                ]',
            ],
        ],
    ],

];
