// Detect if running on localhost (dev mode)
export const isLocalhost = () =>
  window.location.hostname === "localhost" ||
  window.location.hostname === "127.0.0.1";

// Detect if running on GitHub Pages under the /ve-shop/ subpath
export const isGitHubPages = () => {
  // This covers both the root path and any subpath, including custom domains
  return window.location.pathname === "/ve-shop" ||
    window.location.pathname.startsWith("/ve-shop/");
};

// Return the correct base path for Router and asset URLs
export const getBasePath = () => {
  // Localhost: root "/"
  if (isLocalhost()) return "/";
  // Any other domain, if pathname starts with /ve-shop => GitHub Pages
  if (isGitHubPages()) return "/ve-shop/";
  // If deployed elsewhere (e.g. VPS root), you can customize here if needed
  return "/";
};

// Get base URL for API calls
export const getApiBaseUrl = () => {
  const envUrl = import.meta.env.VITE_API_BASE_URL;
  if (envUrl) return envUrl;
  // Use localhost for local, and /ve-shop/api for GitHub Pages, else /api
  if (isLocalhost()) return "http://localhost:8000";
  if (isGitHubPages()) return "/ve-shop/api";
  return "/api";
};
