import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import { resolve } from 'path';

export default defineConfig({
  plugins: [react()],
  root: resolve(__dirname), // raiz é a pasta React
  build: {
    outDir: resolve(__dirname, '../JAVASCRIPT/react-build'), // onde vai o build
    emptyOutDir: true,
  },
});