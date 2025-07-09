import { Header } from "@/components/layout/Header";
import { Footer } from "@/components/layout/Footer";
import { ProductGrid } from "@/components/products/ProductGrid";
import { useParams } from "react-router-dom";
import { useLanguageStore } from "@/store/languageStore";

const CategoryProducts = () => {
  const { id } = useParams();
  const { direction } = useLanguageStore();

  return (
    <div className="min-h-screen bg-background" dir={direction}>
      <Header />
      <main className="py-8 container mx-auto px-4">
        <ProductGrid categoryId={id || 'all'} />
      </main>
      <Footer />
    </div>
  );
};

export default CategoryProducts;
