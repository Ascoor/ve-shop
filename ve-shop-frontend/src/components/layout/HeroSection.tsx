import { Button } from "@/components/ui/button";
import { useTranslation } from "react-i18next";
import { useLanguageStore } from "@/store/languageStore";
import { cn } from "@/lib/utils";

export const HeroSection = () => {
  const { t } = useTranslation('common');
  const { direction } = useLanguageStore();
  const isRTL = direction === "rtl";

  return (
    <section 
      dir={direction}
      className="relative bg-gradient-hero py-20 px-4 overflow-hidden"
    >
      {/* Background decoration */}
      <div className="absolute inset-0 opacity-30">
        <div className="w-full h-full bg-background/5" style={{
          backgroundImage: `url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E")`
        }} />
      </div>
      
      <div className="container mx-auto relative z-10">
        <div className={cn(
          "grid grid-cols-1 lg:grid-cols-2 gap-12 items-center",
          isRTL && "lg:grid-flow-col-dense"
        )}>
          {/* Content */}
          <div className={cn(
            "text-center lg:text-left",
            isRTL && "lg:text-right lg:order-2"
          )}>
            <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6 leading-tight">
              {t('hero.title')}
              <span className="block bg-gradient-primary bg-clip-text text-transparent">
                {t('hero.title_highlight')}
              </span>
            </h1>
            <p className={cn(
              "text-lg md:text-xl text-muted-foreground mb-8 max-w-lg",
              isRTL ? "lg:ml-auto" : "lg:mr-auto lg:ml-0"
            )}>
              {t('hero.subtitle')}
            </p>
            <div className={cn(
              "flex flex-col sm:flex-row gap-4 justify-center lg:justify-start",
              isRTL && "lg:justify-end"
            )}>
              <Button 
                size="lg" 
                className="bg-primary hover:bg-primary-hover text-primary-foreground px-8 py-4 text-lg font-semibold"
              >
                {t('hero.shop_now')}
              </Button>
              <Button 
                variant="outline" 
                size="lg"
                className="border-primary text-primary hover:bg-primary hover:text-primary-foreground px-8 py-4 text-lg font-semibold"
              >
                {t('hero.view_deals')}
              </Button>
            </div>
          </div>

          {/* Hero Image */}
          <div className={cn(
            "relative",
            isRTL && "lg:order-1"
          )}>
            <div className="aspect-square rounded-2xl overflow-hidden bg-gradient-primary/10 p-8">
              <img
                src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=600&h=600&fit=crop"
                alt={t('hero.title')}
                className="w-full h-full object-cover rounded-xl shadow-lg"
              />
            </div>
            {/* Floating badges - positioned based on direction */}
            <div className={cn(
              "absolute -top-4 bg-secondary text-secondary-foreground px-4 py-2 rounded-full font-semibold shadow-lg animate-bounce",
              isRTL ? "-left-4" : "-right-4"
            )}>
              {t('hero.discount_badge')}
            </div>
            <div className={cn(
              "absolute -bottom-4 bg-success text-success-foreground px-4 py-2 rounded-full font-semibold shadow-lg",
              isRTL ? "-right-4" : "-left-4"
            )}>
              {t('hero.free_shipping_badge')}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};