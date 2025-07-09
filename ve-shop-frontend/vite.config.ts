import { defineConfig } from "vite";
import react from "@vitejs/plugin-react-swc";
import path from "path";
import { componentTagger } from "lovable-tagger";

// Dynamically set the base path:
// - "/ve-shop/" when GITHUB_PAGES is true (for GitHub Pages)
// - "/" for all other cases (local/dev/VPS)
export default defineConfig(({ mode }) => ({
  base: process.env.GITHUB_PAGES === "1" ? "/ve-shop/" : "/",
  server: {
    host: "::",
    port: 8080,
  },
  plugins: [
    react(),
    mode === "development" && componentTagger()
  ].filter(Boolean),
  resolve: {
    alias: {
      "@": path.resolve(__dirname, "./src"),
    },
  },
}));
