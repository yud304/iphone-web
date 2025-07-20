// const laravel = require('laravel-vite-plugin');
// const tailwindcss = require('@tailwindcss/vite');

// module.exports = {
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
//     build: {
//         outDir: 'public/build',
//         emptyOutDir: true,
//         manifest: true,
//     },
// };

// export default defineConfig({
//     build: {
//       manifest: true,
//       outDir: 'public/build',
//       rollupOptions: {
//         input: 'resources/js/app.js', // adjust to your entry
//       },
//     },
//   });

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  build: {
    manifest: true,
    outDir: 'public/build',
  },
  base: "/iphone-web"
});
