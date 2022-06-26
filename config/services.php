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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    //facebook
    'facebook' => [
        'client_id' => '728998154983071',
        'client_secret' => 'c4ed06f7f12210435797aa9dd9c4bc5f',
        'redirect' => 'http://localhost:8000/auth/facebook/callback/',
    ],

    //google
    'google' => [
        'client_id' => '813322107928-u29fta2s1cge6pgn93kcdapo7oh9v96k.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
];
