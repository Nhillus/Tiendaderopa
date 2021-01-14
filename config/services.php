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

    'google' => [
        'client_id' => env('992765765863-clh7cq9f4j7o9vcei7l4pcumng978pon.apps.googleusercontent.com'),
        'client_secret' => env('nrXLHRWXZdNE4E8ciYbS7qj7'),
        'redirect' => 'http://your-callback-url',
    ],
    
    
    'facebook' => [
        'client_id' => env('402967344122589'),
        'client_secret' => env('289094315df0686785708b604d92538f'),
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    

];
