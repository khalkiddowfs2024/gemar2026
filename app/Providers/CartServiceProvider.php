<?php

namespace App\Providers;

use App\Services\CartService;
use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
         // Enregistrer la classe dans le conteneur de services
         $this->app->singleton(CartService::class, function ($app) {
            return new CartService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Instancier et exécuter une méthode au démarrage
        $service = $this->app->make(CartService::class);
        //dd(CartService::clearCart());
    }
}
