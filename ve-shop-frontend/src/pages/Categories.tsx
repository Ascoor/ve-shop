import { Header } from "@/components/layout/Header";
import { Footer } from "@/components/layout/Footer";
import { useCatalogStore } from "@/store/catalogStore";
import { useNavigate } from "react-router-dom";
import { useLanguageStore } from "@/store/languageStore";

const Categories = () => {
  const categories = useCatalogStore((state) => state.categories);
  const { direction } = useLanguageStore();
  const navigate = useNavigate();

  return (
    <div className="min-h-screen bg-background" dir={direction}>
      <Header />
      <main className="py-8">
        <div className="container mx-auto px-4 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
          {categories.map((cat) => (
            <button
              key={cat.id}
              onClick={() => navigate(`/categories/${cat.id}`)}
              className="p-4 border rounded-lg flex flex-col items-center hover:bg-muted transition-colors"
            >
              <span className="text-3xl mb-2">{cat.icon}</span>
              <span className="font-medium">{cat.name}</span>
            </button>
          ))}
        </div>
      </main>
      <Footer />
    </div>
  );
};

export default Categories;
