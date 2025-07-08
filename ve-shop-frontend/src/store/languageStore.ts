import { create } from 'zustand';
import { persist } from 'zustand/middleware';
import i18n from '@/lib/i18n';

interface LanguageState {
  language: string; // 'ar' | 'en'
  direction: 'ltr' | 'rtl';
  setLanguage: (language: string) => Promise<void>;
}

export const useLanguageStore = create<LanguageState>()(
  persist(
    (set, get) => ({
      language: i18n.language,
      direction: i18n.language === 'ar' ? 'rtl' : 'ltr',
      setLanguage: async (language: string) => {
        const direction = language === 'ar' ? 'rtl' : 'ltr';
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
