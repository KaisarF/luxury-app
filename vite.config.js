import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        watch: {

        }
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/landing.scss',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
        },
    }
});
