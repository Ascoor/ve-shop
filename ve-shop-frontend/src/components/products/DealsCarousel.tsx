import { useCatalogStore } from "@/store/catalogStore";
import { Carousel, CarouselContent, CarouselItem, CarouselNext, CarouselPrevious } from "@/components/ui/carousel";
import { ProductCard } from "./ProductCard";

export const DealsCarousel = () => {
  const products = useCatalogStore((state) => state.products.slice(0, 8));

  return (
    <section className="py-16 bg-muted/30">
      <div className="container mx-auto px-4 relative">
        <h2 className="text-3xl font-bold mb-6 text-center">Top Deals</h2>
        <Carousel className="overflow-visible">
          <CarouselContent className="-ml-4">
            {products.map((product) => (
              <CarouselItem key={product.id} className="pl-4 basis-1/2 md:basis-1/3 lg:basis-1/4">
                <ProductCard {...product} />
              </CarouselItem>
            ))}
          </CarouselContent>
          <CarouselPrevious />
          <CarouselNext />
        </Carousel>
      </div>
    </section>
  );
};
