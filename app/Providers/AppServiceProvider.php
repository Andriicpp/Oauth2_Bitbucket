<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $parametrs = [
            'client_id' => config('oauth.github.client_id'),
            'redirect_uri' => config('oauth.github.callback_url'),
            'scope' => 'read:user user:email',
        ];

        View::share('oauth_github_url', 'https://github.com/login/oauth/authorize?' . http_build_query($parametrs));
    }
}
