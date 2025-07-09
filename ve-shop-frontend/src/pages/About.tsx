import { Header } from "@/components/layout/Header";
import { Footer } from "@/components/layout/Footer";
import { useLanguageStore } from "@/store/languageStore";

const About = () => {
  const { direction } = useLanguageStore();
  return (
    <div className="min-h-screen bg-background" dir={direction}>
      <Header />
      <main className="py-8 container mx-auto px-4 prose dark:prose-invert">
        <h1>About Us</h1>
        <p>
          Ve-Shop is a demo e-commerce platform built with React and TailwindCSS.
          It showcases a modern component architecture with full RTL and dark mode support.
        </p>
      </main>
      <Footer />
    </div>
  );
};

export default About;
