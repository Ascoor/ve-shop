 
// Environment helper utilities for detecting where the app is running.
// This allows us to adjust routing basenames and API/asset URLs when
// building for different deployment targets. The base path can be
// configured via the VITE_BASE_PATH environment variable which is set
// by the npm build scripts.

// Returns true if the app is running on localhost. 
// Detect if running on localhost (dev mode)
// Detect if running on localhost (dev mode)
export const isLocalhost = () =>
  window.location.hostname === "localhost" ||
  window.location.hostname === "127.0.0.1";

// Detect if running on GitHub Pages under the /ve-shop/ subpath
export const isGitHubPages = () =>
  window.location.hostname.endsWith("github.io") ||
  window.location.pathname === "/ve-shop" ||
  window.location.pathname.startsWith("/ve-shop/");

// Return the correct base path for Router and asset URLs
export const getBasePath = () => {
  // Priority: Use VITE_BASE_PATH if set (by npm build scripts)
  if (import.meta.env.VITE_BASE_PATH) return import.meta.env.VITE_BASE_PATH;
  // Localhost: root "/"
  if (isLocalhost()) return "/";
  // GitHub Pages: "/ve-shop/"
  if (isGitHubPages()) return "/ve-shop/";
  // If deployed elsewhere (VPS, custom domain root)
  return "/";
};

// Get base URL for API calls
export const getApiBaseUrl = () => {
  // If you set VITE_API_BASE_URL in .env or workflow, it takes priority
  const envUrl = import.meta.env.VITE_API_BASE_URL;
  if (envUrl) return envUrl;
  // Localhost
  if (isLocalhost()) return "http://localhost:8000";
  // GitHub Pages (if you ever want to point to an external API)
  if (isGitHubPages()) return "/ve-shop/api";
  // Default: relative to current path (VPS etc.)
  return "/api";
};