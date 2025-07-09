import { useEffect } from 'react';
import { useTranslation } from 'react-i18next';
import { useLanguageStore } from '@/store/languageStore';

interface I18nProviderProps {
  children: React.ReactNode;
}

export const I18nProvider: React.FC<I18nProviderProps> = ({ children }) => {
  const { initializeLanguage } = useLanguageStore();
  const { i18n } = useTranslation();

  useEffect(() => {
    // Initialize language on app start
    initializeLanguage();
    
    // Listen for language changes from i18n
    const handleLanguageChange = (language: string) => {
      const direction = language === 'ar' ? 'rtl' : 'ltr';
      document.documentElement.dir = direction;
      document.documentElement.lang = language;
      
      // Update body class
      document.body.className = document.body.className.replace(/\b(rtl|ltr)\b/g, '');
      document.body.classList.add(direction);
    };

    i18n.on('languageChanged', handleLanguageChange);

    return () => {
      i18n.off('languageChanged', handleLanguageChange);
    };
  }, [initializeLanguage, i18n]);

  return <>{children}</>;
};