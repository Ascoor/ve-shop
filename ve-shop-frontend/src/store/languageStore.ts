import { create } from 'zustand';
import { persist } from 'zustand/middleware';
import i18n from '@/lib/i18n';

export type Language = 'ar' | 'en';
export type Direction = 'ltr' | 'rtl';

interface LanguageState {
  language: Language;
  direction: Direction;
  isLoading: boolean;
  setLanguage: (language: Language) => Promise<void>;
  initializeLanguage: () => void;
}

export const useLanguageStore = create<LanguageState>()(
  persist(
    (set, get) => ({
      language: 'en',
      direction: 'ltr',
      isLoading: false,
      
      setLanguage: async (language: Language) => {
        set({ isLoading: true });
        
        try {
          const direction = language === 'ar' ? 'rtl' : 'ltr';
          
          // Change language in i18n
          await i18n.changeLanguage(language);
          
          // Update DOM attributes
          document.documentElement.dir = direction;
          document.documentElement.lang = language;
          
          // Update state
          set({ language, direction, isLoading: false });
          
          // Add class to body for CSS targeting
          document.body.className = document.body.className.replace(/\b(rtl|ltr)\b/g, '');
          document.body.classList.add(direction);
          
        } catch (error) {
          console.error('Failed to change language:', error);
          set({ isLoading: false });
        }
      },
      
      initializeLanguage: () => {
        const currentLang = i18n.language as Language;
        const direction = currentLang === 'ar' ? 'rtl' : 'ltr';
        
        document.documentElement.dir = direction;
        document.documentElement.lang = currentLang;
        document.body.classList.add(direction);
        
        set({ 
          language: currentLang, 
          direction,
          isLoading: false 
        });
      },
    }),
    {
      name: 've-shop-language',
      partialize: (state) => ({ 
        language: state.language,
        direction: state.direction
      }),
    }
  )
);
