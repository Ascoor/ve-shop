import { create } from 'zustand';
import { persist } from 'zustand/middleware';
import i18n, { AvailableLanguage, loadLocale } from '@/lib/i18n';

interface LanguageState {
  language: AvailableLanguage;
  direction: 'ltr' | 'rtl';
  setLanguage: (language: AvailableLanguage) => Promise<void>;
}

export const useLanguageStore = create<LanguageState>()(
  persist(
    (set, get) => ({
      language: i18n.language as AvailableLanguage,
      direction: i18n.dir(),
      setLanguage: async (language) => {
        const direction = language === 'ar' ? 'rtl' : 'ltr';
        await loadLocale(language);
        await i18n.changeLanguage(language);
        set({ language, direction });

        document.documentElement.dir = direction;
        document.documentElement.lang = language;
      },
    }),
    {
      name: 've-shop-language',
    }
  )
);