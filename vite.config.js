import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/perfect-scrollbar.css',
                'resources/js/app.js',
                'resources/js/swiper-plugins.js',
                'resources/js/motion-plugin.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
