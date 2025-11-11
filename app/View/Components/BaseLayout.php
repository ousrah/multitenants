<?php

namespace App\View\Components;

use App\Services\ThemeManager;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class BaseLayout extends Component
{
    protected ThemeManager $themeManager;
    protected string $themeSlug;

    public function __construct(ThemeManager $themeManager)
    {
        $this->themeManager = $themeManager;
        $this->themeSlug = $this->themeManager->getCurrentThemeSlug();
    }

    public function render()
    {
        // LA LIGNE CORRIGÉE, en utilisant le helper standard de Laravel.
        // resource_path() pointe directement vers le dossier /resources.
        $themePath = resource_path('views/themes/' . $this->themeSlug);

        $themeViewsPath = $themePath . '/views';
        $themeComponentsPath = $themePath . '/components';

        // Dit à Laravel de chercher les vues D'ABORD dans le dossier du thème
        if (is_dir($themeViewsPath)) {
            view()->getFinder()->prependLocation($themeViewsPath);
        }

        // Dit à Blade où trouver les composants du thème pour <x-theme::...>
        if (is_dir($themeComponentsPath)) {
            Blade::anonymousComponentPath($themeComponentsPath, 'theme');
        }
        
        // Retourne la vue 'layouts.app'. Laravel la trouvera maintenant
        // dans le dossier du thème grâce à la ligne 'prependLocation'.
        return view('layouts.base');
    }
}