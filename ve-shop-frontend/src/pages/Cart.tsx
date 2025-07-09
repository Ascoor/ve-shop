import { Header } from "@/components/layout/Header";
import { Footer } from "@/components/layout/Footer";
import { CartReview } from "@/components/checkout/CartReview";
import { useLanguageStore } from "@/store/languageStore";

const Cart = () => {
  const { direction } = useLanguageStore();
  return (
    <div className="min-h-screen bg-background" dir={direction}>
      <Header />
      <main className="py-8 container mx-auto px-4">
        <CartReview />
      </main>
      <Footer />
    </div>
  );
};

export default Cart;
