<?php

namespace App\Providers;

use App\Services\ThemeManager;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View; // <-- IMPORTANT : Importez la façade View
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ThemeManager::class, function () {
            return new ThemeManager();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // La logique pour la console DOIT rester ici, car les View Composers ne s'exécutent pas en console.
        if ($this->app->runningInConsole()) {
            // Pour `php artisan optimize`, on utilise le thème par défaut.
            $themeComponentPath = resource_path('views/themes/minimalist/components');
            if (is_dir($themeComponentPath)) {
                Blade::anonymousComponentPath($themeComponentPath, 'theme');
            }
            return;
        }

        // =================================================================
        // LA NOUVELLE LOGIQUE POUR LES REQUÊTES WEB
        // =================================================================
        // On demande à Laravel d'exécuter ce code pour toutes les vues ('*'),
        // juste avant de les rendre.
        View::composer('*', function ($view) {
            // À ce stade, nous sommes CERTAINS que les middlewares (y compris tenancy) ont été exécutés.

            // On récupère le ThemeManager
            $themeManager = $this->app->make(ThemeManager::class);

            // On obtient le slug du thème (qui sera maintenant le bon, ex: 'minimalist')
            $currentTheme = $themeManager->getCurrentThemeSlug();

            // On construit les chemins
            $themeViewPath = resource_path('views/themes/' . $currentTheme);
            $themeComponentPath = resource_path('views/themes/' . $currentTheme . '/components');

            // On configure les chemins de vues et de composants avec la certitude d'avoir le bon thème
            if (is_dir($themeViewPath)) {
                $this->app['view']->prependLocation($themeViewPath);
            }

            if (is_dir($themeComponentPath)) {
                Blade::anonymousComponentPath($themeComponentPath, 'theme');
            }
        });
    }
}