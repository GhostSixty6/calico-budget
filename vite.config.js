import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/css/choices.css', 'resources/js/choices.min.js', 'resources/js/app.js'],
      refresh: true,
    }),
    tailwindcss(),
  ],
  server: {
    cors: true,  
    https: true,
    hmr: {
      host: 'calico.vault',
    },
  },
});
