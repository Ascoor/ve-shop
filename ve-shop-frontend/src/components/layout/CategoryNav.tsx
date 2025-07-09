import { Button } from "@/components/ui/button";
import { useTranslation } from "react-i18next";
import { useLanguageStore } from "@/store/languageStore";
import { useCatalogStore } from "@/store/catalogStore";
import { cn } from "@/lib/utils";

interface CategoryNavProps {
  selected?: string;
  onSelect?: (id: string) => void;
}

export const CategoryNav = ({ selected = "all", onSelect }: CategoryNavProps) => {
  const { t } = useTranslation('common');
  const { direction } = useLanguageStore();
  const categories = useCatalogStore((state) => state.categories);
  const isRTL = direction === "rtl";

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
          <Button
            key="all"
            variant={selected === 'all' ? 'default' : 'outline'}
            className={cn(
              'h-auto p-4 flex flex-col items-center gap-2 transition-all duration-normal',
              selected === 'all'
                ? 'bg-primary text-primary-foreground shadow-md'
                : 'hover:bg-primary/10 hover:border-primary hover:text-primary'
            )}
            onClick={() => onSelect?.('all')}
          >
            <span className="text-2xl">🛍️</span>
            <span className="text-sm font-medium text-center">
              {t('categories.all')}
            </span>
          </Button>

          {categories.map((category) => (
            <Button
              key={category.id}
              variant={selected === category.id ? 'default' : 'outline'}
              className={cn(
                'h-auto p-4 flex flex-col items-center gap-2 transition-all duration-normal',
                selected === category.id
                  ? 'bg-primary text-primary-foreground shadow-md'
                  : 'hover:bg-primary/10 hover:border-primary hover:text-primary'
              )}
              onClick={() => onSelect?.(category.id)}
            >
              <span className="text-2xl">{category.icon}</span>
              <span className="text-sm font-medium text-center">
                {category.name}
              </span>
            </Button>
          ))}
        </div>
      </div>
    </section>
  );};