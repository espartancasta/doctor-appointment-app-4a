<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Jetstream::useUserModel(\App\Models\User::class);

        // si usas equipos:
        // Jetstream::createTeamsUsing(....);
    }
}
