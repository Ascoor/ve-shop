import { defineConfig } from "vite";
import react from "@vitejs/plugin-react-swc";
import path from "path";
import { componentTagger } from "lovable-tagger";

// =========================
// شرح: 
// - استخدم VITE_BASE_PATH من متغيرات البيئة (يمكنك ضبطه في .env أو من سكربتات build)
// - عند GitHub Pages اجعله "/ve-shop/"، 
// - عند VPS أو dev يكون "/" (الافتراضي)
// - يمكنك وضعه في scripts كالتالي:
//   "build:gh": "VITE_BASE_PATH=/ve-shop/ vite build",
//   "build": "VITE_BASE_PATH=/ vite build"
// =========================

export default defineConfig(({ mode }) => ({
  base: process.env.VITE_BASE_PATH || "/",
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
