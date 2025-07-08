import i18n from 'i18next';
import { initReactI18next } from 'react-i18next';

/**
 * Dynamically load translation files using Vite's `import.meta.glob`.
 * Files live under ../i18n/{lang}/{namespace}.json
 */
const translationFiles = import.meta.glob('../i18n/*/*.json');

export const namespaces = ['common', 'product', 'cart', 'auth', 'ui'] as const;
export type AvailableLanguage = 'en' | 'ar';

/** Load all namespaces for the given language. */
export const loadLocale = async (lng: AvailableLanguage) => {
  const loaders = namespaces.map(async (ns) => {
    const mod = await translationFiles[`../i18n/${lng}/${ns}.json`]?.();
    if (mod?.default) {
      i18n.addResourceBundle(lng, ns, mod.default, true, true);
    }
  });
  await Promise.all(loaders);
};

const initialLanguage: AvailableLanguage =
  (typeof navigator !== 'undefined' && navigator.language.startsWith('ar'))
    ? 'ar'
    : 'en';

await loadLocale(initialLanguage);

i18n.use(initReactI18next).init({
  lng: initialLanguage,
  fallbackLng: 'en',
  defaultNS: 'common',
  ns: namespaces,
  interpolation: { escapeValue: false },
  react: { useSuspense: true },
  debug: process.env.NODE_ENV === 'development',
});

i18n.on('languageChanged', async (lng) => {
  await loadLocale(lng as AvailableLanguage);
  const dir = lng === 'ar' ? 'rtl' : 'ltr';
  document.documentElement.dir = dir;
  document.documentElement.lang = lng;
});

export default i18n;