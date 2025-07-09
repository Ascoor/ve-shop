import { defineConfig } from "vite";
import react from "@vitejs/plugin-react-swc";
import path from "path";
import { componentTagger } from "lovable-tagger";

// https://vitejs.dev/config/
// Use a different base path only when building for GitHub Pages. This is
// controlled via the GITHUB_PAGES environment variable so regular production
// builds still use the root path.
export default defineConfig(({ mode }) => ({
  base: process.env.GITHUB_PAGES ? "/ve-shop/" : "/",
  server: {
    host: "::",
    port: 8080,
  },
  plugins: [react(), mode === "development" && componentTagger()].filter(
    Boolean,
  ),
  resolve: {
    alias: {
      "@": path.resolve(__dirname, "./src"),
    },
  },
}));
