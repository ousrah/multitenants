<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class ThemeManager
{
    public function getCurrentThemeSlug(): string
    {
        if (!tenancy()->initialized || !tenancy()->tenant) {
            return 'minimalist'; // Thème par défaut
        
        }

        $cacheKey = 'tenant_theme_' . tenancy()->tenant->getTenantKey();

        return Cache::rememberForever($cacheKey, function () {
            $themeSetting = Setting::where('key', 'theme')->first()?->value;
            return $themeSetting ?? 'minimalist';
        });
    }
}