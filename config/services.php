<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '586226059076247',
        'client_secret' => 'aa14602a128c6dec20c0af36b3394e84',
        'redirect' => 'http://localhost:8000/api/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '1013241044519-h42t6fus92jdjk7ca6rahg22f07nr510.apps.googleusercontent.com',
        'client_secret' => 'JHqwz_jywQnH_rkWPKchikoP',
        'redirect' => 'http://localhost:8000/api/auth/google/callback',
    ],
];
