import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { useTranslation } from "react-i18next";
import { useCatalogStore } from "@/store/catalogStore";

interface CategorySidebarProps {
  onCategorySelect?: (categoryId: string) => void;
  selectedCategory?: string;
}

export const CategorySidebar = ({ onCategorySelect, selectedCategory }: CategorySidebarProps) => {
  const { t } = useTranslation('common');
  const categories = useCatalogStore((state) => state.categories);

  const handleCategoryClick = (categoryId: string) => {
    onCategorySelect?.(categoryId);
  };

  return (
    <Card className="w-80 h-fit">
      <CardHeader>
        <CardTitle className="text-lg font-semibold">
          {t('navigation.categories')}
        </CardTitle>
      </CardHeader>
      <CardContent className="p-0">
        <div className="space-y-1">
          <Button
            variant="ghost"
            className={`w-full justify-start px-4 py-3 h-auto ${
              selectedCategory === 'all' ? 'bg-primary/10 text-primary' : ''
            }`}
            onClick={() => handleCategoryClick('all')}
          >
            <span className="text-lg mr-3">🛍️</span>
            <span className="flex-1 text-left">{t('categories.all')}</span>
          </Button>

          {categories.map((category) => (
            <Button
              key={category.id}
              variant="ghost"
              className={`w-full justify-start px-4 py-3 h-auto ${
                selectedCategory === category.id ? 'bg-primary/10 text-primary' : ''
              }`}
              onClick={() => handleCategoryClick(category.id)}
            >
              <span className="text-lg mr-3">{category.icon}</span>
              <span className="flex-1 text-left">{category.name}</span>
            </Button>
          ))}
        </div>
      </CardContent>
    </Card>
  );};