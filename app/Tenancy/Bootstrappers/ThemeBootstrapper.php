<?php

namespace App\Tenancy\Bootstrappers;

use App\Services\ThemeManager;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Stancl\Tenancy\Contracts\TenancyBootstrapper;
use Stancl\Tenancy\Contracts\Tenant;

class ThemeBootstrapper implements TenancyBootstrapper
{
    protected ThemeManager $themeManager;

    // On injecte notre ThemeManager pour l'utiliser
    public function __construct(ThemeManager $themeManager)
    {
        $this->themeManager = $themeManager;
    }

    /**
     * C'est la méthode qui sera appelée par stancl/tenancy
     * au moment parfait du cycle de vie.
     */
    public function bootstrap(Tenant $tenant): void
    {
        $themeSlug = $this->themeManager->getCurrentThemeSlug();
        $themePath = base_path('themes/' . $themeSlug);

        // -- Configuration des Vues du Thème --
        $themeViewsPath = $themePath . '/views';
        if (is_dir($themeViewsPath)) {
            // On enregistre le namespace 'theme::'. C'est ce qui corrige l'erreur.
            View::addNamespace('theme', $themeViewsPath);
        }

        // -- Configuration des Composants Blade du Thème --
        $themeComponentsPath = $themePath . '/components';
        if (is_dir($themeComponentsPath)) {
            // On enregistre les composants pour <x-theme::...>
            Blade::anonymousComponentPath($themeComponentsPath, 'theme');
        }
    }

    /**
     * Cette méthode est appelée quand on quitte le contexte d'un tenant.
     * Pour notre cas, nous n'avons rien à faire.
     */
    public function revert(): void
    {
        // Pas d'action nécessaire.
    }
}