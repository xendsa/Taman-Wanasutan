import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";
import { fileURLToPath } from "url";
import { dirname, resolve } from "path";

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

export default defineConfig({
  plugins: [react()],
  resolve: {
    alias: {
      "@components": resolve(__dirname, "src/components"),
      "@assets": resolve(__dirname, "src/assets"),
      "@": resolve(__dirname, "./src"),
      "@pages": resolve(__dirname, "src/pages"),
      "@layout": resolve(__dirname, "src/layout"),
      "@routes": resolve(__dirname, "src/routes"),
      "@utils": resolve(__dirname, "src/utils"),
    },
  },
});
