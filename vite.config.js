import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    manifest: true,
    outDir: `dist`,
    emptyOutDir: true,
    rollupOptions: {
      input: {
        appJS: 'assets/script/app.js',
        appCSS: 'assets/style/app.css',
      },
      output: {
        entryFileNames: "[name].js",
        assetFileNames: "[name].[ext]",
      }
    },
  },
  server: {
    host: 'localhost',
    port: 5173,
  },
});