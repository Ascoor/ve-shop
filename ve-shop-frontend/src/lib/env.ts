// Environment helper utilities for detecting where the app is running.
// This allows us to adjust routing basenames and API/asset URLs when
// building for different deployment targets. The base path can be
// configured via the VITE_BASE_PATH environment variable which is set
// by the npm build scripts.

// Returns true if the app is running on localhost.
export const isLocalhost = () =>
  window.location.hostname === "localhost" ||
  window.location.hostname === "127.0.0.1";

// Detects if we are served from GitHub Pages. We can simply check that we are
// not on localhost and assume any other host is the production GitHub Pages
// environment. This keeps local development using "/" while production uses
// the "/ve-shop/" prefix.
export const isGitHubPages = () => !isLocalhost();

/**
 * Base path for routing and assets.
 *
 * The build scripts set `VITE_BASE_PATH` to `/` for the VPS deployment and
 * `/ve-shop/` for GitHub Pages. During local development the variable is not
 * provided so we default to `/`.
 */
export const getBasePath = () =>
  import.meta.env.VITE_BASE_PATH || (isGitHubPages() ? "/ve-shop/" : "/");

// Base URL for API calls. If VITE_API_BASE_URL is provided it takes
// precedence. Otherwise fall back to a reasonable default that respects
// the current environment.
export const getApiBaseUrl = () => {
  const envUrl = import.meta.env.VITE_API_BASE_URL;
  if (envUrl) return envUrl;
  return isLocalhost() ? "http://localhost:8000" : "/api";
};
