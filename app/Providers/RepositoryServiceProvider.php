<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $repositories = config()->get('repository.models');

        foreach ($repositories as $repository) {
            $this->app->bind('App\Journey\Repository\Repositories\\' . $repository . 'Repository', 'App\Journey\Repository\Repositories\\' . $repository . '\Eloquent' . $repository . 'Repository' );
        }

    }

    public function register()
    {

    }

}
