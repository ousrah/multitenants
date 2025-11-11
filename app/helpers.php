<?php
// Fichier : app/helpers.php (À GARDER TEL QUEL)

use App\Services\ThemeManager;
use Illuminate\Foundation\Vite;
use Illuminate\Support\HtmlString;

if (! function_exists('theme_vite')) {
    function theme_vite(string|array $entrypoints): HtmlString
    {
        $themeSlug = app(ThemeManager::class)->getCurrentThemeSlug();
        if (!$themeSlug) {
            return new HtmlString('');
        }

        // Ce code transforme le chemin simple du thème en chemin complet
        // pour correspondre au manifest.json central.
        $projectRelativeEntrypoints = collect($entrypoints)->map(function ($entrypoint) use ($themeSlug) {
            return 'resources/views/themes/' . $themeSlug . '/' . ltrim($entrypoint, '/');
        })->all();
        
        return app(Vite::class)($projectRelativeEntrypoints);
    }
}