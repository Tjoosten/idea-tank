<?php

/*
 * This file is part of Laravel GitHub.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => env('GITHUB_CONNECTION','other'),

    /*
    |--------------------------------------------------------------------------
    | GitHub Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like. Note that the 3 supported authentication methods are:
    | "application", "password", and "token".
    |
    */

    'connections' => [

        'main' => [
            'token'   => env('GITHUB_TOKEN', 'your-token'),
            'method'  => env('GITHUB_METHOD', 'token'),
            'cache'   => true,
            // 'backoff' => false,
            // 'logging' => Guzzle\Log\MessageFormatter::DEBUG_FORMAT,
            // 'baseUrl' => 'https://api.github.com/',
            // 'version' => 'v3',
        ],

        'alternative' => [
            'clientId'     => env('GITHUB_CLIENT_ID', 'your-client-id'),
            'clientSecret' => env('GITHUB_CLIENT_SECRET', 'your-client-secret'),
            'method'       => env('GITHUB_METHOD' ,'application'),
            'cache'        => true,
            // 'backoff'      => false,
            // 'logging'      => Guzzle\Log\MessageFormatter::DEBUG_FORMAT,
            // 'baseUrl'      => 'https://api.github.com/',
            // 'version'      => 'v3',
        ],

        'other' => [
            'username' => env('GITHUB_USERNAME', 'Tjoosten'),
            'password' => env('GITHUB_PASSWORD', 'password'),
            'method'   => env('GITHUB_METHOD', 'password'),
            'cache'    => true,
            // 'backoff'  => false,
            // 'logging'  => Guzzle\Log\MessageFormatter::DEBUG_FORMAT,
            // 'baseUrl'  => 'https://api.github.com/',
            // 'version'  => 'v3',
        ],

    ],

];
