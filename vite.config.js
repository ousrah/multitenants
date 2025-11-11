// vite.config.js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [

            // thème central
                'resources/css/app.css',
                'resources/css/app-rtl.css',
                'resources/js/app.js',
             // Thème minimalist
                'resources/views/themes/minimalist/assets/css/app.css',
                'resources/views/themes/minimalist/assets/js/app.js',

                // Thème blackside
                'resources/views/themes/blackside/assets/css/app.css',
                'resources/views/themes/blackside/assets/js/app.js',

                                // Thème modern
                'resources/views/themes/modern/assets/css/app.css',
                'resources/views/themes/modern/assets/js/app.js',
                // Thème minimalist
  
                // Ajoutez ici les assets de vos futurs thèmes...
                // 
                       ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
