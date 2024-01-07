import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/bootstrap.css',
                'resources/css/cover.css',
                'resources/js/bootstrap.bundle.js',
                'resources/js/datepicker.js',
                'resources/js/jquery.js',
            ],
            refresh: true,
        }),
    ],
});
