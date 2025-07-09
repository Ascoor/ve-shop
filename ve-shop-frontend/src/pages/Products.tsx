import { useState } from "react";
import { Header } from "@/components/layout/Header";
import { Footer } from "@/components/layout/Footer";
import { CategorySidebar } from "@/components/products/CategorySidebar";
import { ProductGrid } from "@/components/products/ProductGrid";
import { useLanguageStore } from "@/store/languageStore";

const Products = () => {
  const { direction } = useLanguageStore();
  const [selectedCategory, setSelectedCategory] = useState<string>('all');

  return (
    <div className="min-h-screen bg-background" dir={direction}>
      <Header />
      <main className="py-8">
        <div className="container mx-auto px-4 flex gap-6">
          <div className="hidden lg:block">
            <CategorySidebar
              selectedCategory={selectedCategory}
              onCategorySelect={setSelectedCategory}
            />
          </div>
          <div className="flex-1">
            <ProductGrid categoryId={selectedCategory} />
          </div>
        </div>
      </main>
      <Footer />
    </div>
  );
};

export default Products;
