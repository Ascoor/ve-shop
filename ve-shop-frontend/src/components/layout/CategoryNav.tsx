import { Button } from "@/components/ui/button";
import { useTranslation } from "react-i18next";
import { useLanguageStore } from "@/store/languageStore";
import { cn } from "@/lib/utils";

export const CategoryNav = () => {
  const { t } = useTranslation('common');
  const { direction } = useLanguageStore();
  const isRTL = direction === "rtl";
  
  const categories = [
    { key: "all", icon: "🛍️", active: true },
    { key: "electronics", icon: "📱", active: false },
    { key: "fashion", icon: "👕", active: false },
    { key: "home", icon: "🏠", active: false },
    { key: "sports", icon: "⚽", active: false },
    { key: "beauty", icon: "💄", active: false },
    { key: "books", icon: "📚", active: false },
    { key: "toys", icon: "🎮", active: false }
  ];

  return (
    <section 
      dir={direction}
      className="py-8 border-b border-border bg-muted/30"
    >
      <div className="container mx-auto px-4">
        <div className={cn(
          "flex items-center justify-between mb-6",
          isRTL ? "flex-row-reverse" : "flex-row"
        )}>
          <h2 className="text-2xl font-bold text-foreground">
            {t('categories.shop_by_category')}
          </h2>
          <Button variant="ghost" className="text-primary font-semibold">
            {t('categories.view_all_categories')} {isRTL ? '←' : '→'}
          </Button>
        </div>
        
        <div className="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-4">
          {categories.map((category) => (
            <Button
              key={category.key}
              variant={category.active ? "default" : "outline"}
              className={cn(
                "h-auto p-4 flex flex-col items-center gap-2 transition-all duration-normal",
                category.active 
                  ? 'bg-primary text-primary-foreground shadow-md' 
                  : 'hover:bg-primary/10 hover:border-primary hover:text-primary'
              )}
            >
              <span className="text-2xl">{category.icon}</span>
              <span className="text-sm font-medium text-center">
                {t(`categories.${category.key}`)}
              </span>
            </Button>
          ))}
        </div>
      </div>
    </section>
  );
};