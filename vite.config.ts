import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost'
        }
    },
    plugins: [
        // @ts-expect-error "Cannot find default on 'laravel-vite-plugin'"
        laravel.default({
            input: ['resources/css/tailwind.css', 'resources/js/app.js'],
            refresh: true
        })
    ]
})
