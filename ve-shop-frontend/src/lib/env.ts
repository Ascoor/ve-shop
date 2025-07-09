// Environment helper utilities for detecting where the app is running.
// This allows us to adjust routing basenames and API/asset URLs
// when deployed to GitHub Pages under the /ve-shop/ subpath or when
// running locally during development.

// Returns true if the app is running on localhost.
export const isLocalhost = () =>
  window.location.hostname === "localhost" ||
  window.location.hostname === "127.0.0.1";

// Detects if the current page is being served from the /ve-shop subfolder,
// which indicates a GitHub Pages deployment. A custom domain may still use
// this path, so relying on the hostname alone isn't sufficient.
export const isGitHubPages = () =>
  window.location.pathname === "/ve-shop" ||
  window.location.pathname.startsWith("/ve-shop/");

// Base path for routing and assets. Only use the /ve-shop/ prefix on
// GitHub Pages deployments. All other environments, including local
// development and VPS production, use the root path.
export const getBasePath = () => (isGitHubPages() ? "/ve-shop/" : "/");

// Base URL for API calls. If VITE_API_BASE_URL is provided it takes
// precedence. Otherwise fall back to a reasonable default that respects
// the current environment.
export const getApiBaseUrl = () => {
  const envUrl = import.meta.env.VITE_API_BASE_URL;
  if (envUrl) return envUrl;
  return isLocalhost() ? "http://localhost:8000" : "/api";
};
