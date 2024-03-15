import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import ViteBrowserSync from 'vite-plugin-browser-sync';

export default defineConfig({
    plugins: [
        laravel({
            input: 'public/resources/js/app.js',
            css: 'public/resources/css/style.css',
            refresh: true,
            output: 'public/build/js',
        }),
        ViteBrowserSync({
            server: {
                port: 3001,
                baseDir: 'public/build',
                proxy: false,
            },
            open: false,
            watch: true,
        }),
    ],
    resolve: {
        alias:{
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
