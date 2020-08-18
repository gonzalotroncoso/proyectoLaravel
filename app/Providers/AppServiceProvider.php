<?php

namespace App\Providers;

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
        /*
        Para cambiar el nombre de las funciones create y edit a español
        Route::resouceVerbs([
            'Create' => 'crear',
            'edit' => 'editar'
        ]);
        importar con f5 use Iluminate/Facades/Route; (Se usa contrabarra pero no la encuentro en el teclado)
        */
    }
}
