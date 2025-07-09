import { ProductCard } from "./ProductCard";
import { useCatalogStore } from "@/store/catalogStore";

interface ProductGridProps {
  categoryId?: string;
}

export const ProductGrid = ({ categoryId = "all" }: ProductGridProps) => {
  const products = useCatalogStore((state) =>
    state.getProductsByCategory(categoryId)
  );

  return (
    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      {products.map((product) => (
        <ProductCard key={product.id} {...product} />
      ))}
    </div>
  );};