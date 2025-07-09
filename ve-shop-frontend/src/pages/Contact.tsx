import { Header } from "@/components/layout/Header";
import { Footer } from "@/components/layout/Footer";
import { useLanguageStore } from "@/store/languageStore";

const Contact = () => {
  const { direction } = useLanguageStore();
  return (
    <div className="min-h-screen bg-background" dir={direction}>
      <Header />
      <main className="py-8 container mx-auto px-4 prose dark:prose-invert">
        <h1>Contact Us</h1>
        <p>
          For any inquiries please email <a href="mailto:info@example.com">info@example.com</a>.
        </p>
      </main>
      <Footer />
    </div>
  );
};

export default Contact;
