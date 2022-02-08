<?php

return [
'defaults' => [
    'guard' => 'web',
    'passwords' => 'users',
    ],
    'guards' => [
        'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],
    'api' => ['driver' => 'passport',
    'provider' => 'users',
    'hash' => false
    ],
    ],
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
            ],
        ],
            ];
