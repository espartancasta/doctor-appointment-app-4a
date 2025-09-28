<?php

use Laravel\Jetstream\Features;
use Laravel\Jetstream\Http\Middleware\AuthenticateSession;

return [

    /*
    |--------------------------------------------------------------------------
    | Jetstream Stack
    |--------------------------------------------------------------------------
    */
    'stack' => 'livewire',

    /*
    |--------------------------------------------------------------------------
    | Jetstream Route Middleware
    |--------------------------------------------------------------------------
    */
    'middleware' => ['web'],

    'auth_session' => AuthenticateSession::class,

    /*
    |--------------------------------------------------------------------------
    | Jetstream Guard
    |--------------------------------------------------------------------------
    */
    'guard' => 'sanctum',

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    */
    'features' => [
        Features::profilePhotos(),
        Features::api(),
        // Features::teams(), // descomenta si quieres teams
        Features::accountDeletion(),
        // Features::twoFactorAuthentication([ 'confirm' => true, 'confirmPassword' => true ]),
        // ⚠️ Comentada para evitar error en Laravel 12
    ],

    /*
    |--------------------------------------------------------------------------
    | Profile Photo Disk
    |--------------------------------------------------------------------------
    */
    'profile_photo_disk' => 'public',

];
