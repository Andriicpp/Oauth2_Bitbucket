<?php

return [
    'github' => [
        'client_id' => env('OAUTH_GITHUB_CLIENT_ID'),
        'secret_key' => env('OAUTH_GITHUB_CLIENT_SECRET_KEY'),
        'callback_url' => env('OAUTH_GITHUB_CLIENT_CALLBACK_URL'),
    ]
];
