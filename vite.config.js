import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import ElementPlus from 'unplugin-element-plus/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
        ElementPlus({
            // options
        }),
    ],
});
