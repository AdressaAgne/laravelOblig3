<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use \App\Tag;
use Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view){
            $view->with('tags', Tag::all());
            if(!is_null(Auth::user())){
                $view->with('loggedIn', Auth::user());
            }
            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
