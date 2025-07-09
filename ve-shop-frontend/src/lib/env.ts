// Environment helper utilities for detecting where the app is running.
// This allows us to adjust routing basenames and API/asset URLs
// when deployed to GitHub Pages under the /ve-shop/ subpath or when
// running locally during development.

// Returns true if the app is running on localhost.
export const isLocalhost = () =>
  window.location.hostname === "localhost" ||
  window.location.hostname === "127.0.0.1";

// Base path for routing and assets. Uses "/" for local development
// and "/ve-shop/" when hosted on GitHub Pages.
export const getBasePath = () => (isLocalhost() ? "/" : "/ve-shop/");

// Base URL for API calls. If VITE_API_BASE_URL is provided it takes
// precedence. Otherwise fall back to a reasonable default that respects
// the current environment.
export const getApiBaseUrl = () => {
  const envUrl = import.meta.env.VITE_API_BASE_URL;
  if (envUrl) return envUrl;
  return isLocalhost() ? "http://localhost:8000" : "/ve-shop/api";
};
