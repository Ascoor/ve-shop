import { Search, ShoppingCart, Heart } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Badge } from "@/components/ui/badge";
import { ThemeToggle } from "@/components/ui/theme-toggle";
import { LanguageSwitcher } from "@/components/ui/language-switcher";
import { Logo } from "@/components/ui/logo";
import { useTranslation } from "react-i18next";
import { useNavigate } from "react-router-dom";
import { useCartStore } from "@/store/cartStore";
import { useWishlistStore } from "@/store/wishlistStore";
import { NotificationCenter } from "@/components/notifications/NotificationCenter";
import { AccountDropdown } from "./AccountDropdown";
import { MobileMenu } from "./MobileMenu";
import { MobileSearch } from "./MobileSearch";
import { useLanguageStore } from "@/store/languageStore";
import { cn } from "@/lib/utils";

export const Header = () => {
  const { t } = useTranslation('common');
  const navigate = useNavigate();
  const cartCount = useCartStore((state) => state.getItemCount());
  const wishlistCount = useWishlistStore((state) => state.getItemCount());
  const { direction } = useLanguageStore();
  const isRTL = direction === "rtl";

  return (
    <header
      dir={direction}
      className="sticky top-0 z-50 bg-background/95 backdrop-blur-sm border-b border-border"
    >
      {/* Top bar with promotions */}
      <div className="bg-gradient-primary text-primary-foreground py-2">
        <div className="container mx-auto px-2 sm:px-4 text-center">
          <p className="text-xs sm:text-sm font-medium flex justify-center items-center gap-2">
            <span role="img" aria-label="party">🎉</span>
            {t('hero.free_shipping_badge')}
            <span className="hidden sm:inline">|</span>
            {t('hero.discount_badge')}
          </p>
        </div>
      </div>

      {/* Main header */}
      <div className="container mx-auto px-2 sm:px-4 py-3 sm:py-4">
        <div className="flex items-center justify-between gap-2 sm:gap-4 w-full">
          
          {/* Logo Section */}
          <div className={cn(
            "flex items-center gap-2 min-w-[110px] sm:min-w-[140px]",
            isRTL ? "order-3" : "order-1"
          )}>
            <Button
              variant="ghost"
              className="p-0 h-auto w-auto"
              onClick={() => navigate('/')}
              aria-label={t('navigation.home')}
            >
              <Logo />
            </Button>
          </div>

          {/* Search Section */}
          <div className={cn(
            "flex-1 max-w-2xl mx-2 hidden md:block",
            "order-2"
          )}>
            <div className="relative">
              <Search
                className={cn(
                  "absolute top-1/2 -translate-y-1/2 text-muted-foreground w-5 h-5",
                  isRTL ? "right-3" : "left-3"
                )}
              />
              <Input
                placeholder={t('actions.search') + "..."}
                dir={direction}
                className={cn(
                  "py-3 w-full bg-muted/50 border-none focus:bg-background focus:ring-2 focus:ring-primary/20 text-base sm:text-lg",
                  isRTL ? "pr-10 pl-4" : "pl-10 pr-4"
                )}
              />
            </div>
          </div>

          {/* Actions Section */}
          <div className={cn(
            "flex items-center gap-1 sm:gap-2 min-w-[100px]",
            isRTL ? "order-1" : "order-3"
          )}>
            {/* Mobile Menu - Always first for RTL */}
            <div className="md:hidden">
              <MobileMenu />
            </div>

            {/* Action Buttons */}
            <Button 
              variant="ghost" 
              size="icon" 
              className="relative hidden sm:flex" 
              onClick={() => navigate('/wishlist')}
              aria-label={t('navigation.wishlist')}
            >
              <Heart className="w-5 h-5" />
              {wishlistCount > 0 && (
                <Badge variant="secondary" className={cn(
                  "absolute -top-2 h-5 w-5 flex items-center justify-center p-0 text-xs",
                  isRTL ? "-left-2" : "-right-2"
                )}>
                  {wishlistCount}
                </Badge>
              )}
            </Button>

            <div className="hidden sm:block">
              <NotificationCenter />
            </div>

            <Button
              variant="ghost"
              size="icon"
              className="relative"
              onClick={() => navigate('/checkout')}
              aria-label={t('navigation.cart')}
            >
              <ShoppingCart className="w-5 h-5" />
              {cartCount > 0 && (
                <Badge variant="secondary" className={cn(
                  "absolute -top-2 h-5 w-5 flex items-center justify-center p-0 text-xs",
                  isRTL ? "-left-2" : "-right-2"
                )}>
                  {cartCount}
                </Badge>
              )}
            </Button>

            <div className="md:hidden">
              <MobileSearch />
            </div>

            <div className="hidden sm:block">
              <AccountDropdown />
            </div>

            <div className="hidden sm:block">
              <ThemeToggle />
            </div>

            <LanguageSwitcher />
          </div>
        </div>

        {/* Navigation Bar */}
        <nav className={cn(
          "hidden md:flex items-center gap-4 sm:gap-6 mt-4 pt-4 border-t border-border text-base",
          isRTL ? "flex-row-reverse" : "flex-row"
        )}>
          <Button variant="ghost" className="font-medium">{t('categories.electronics')}</Button>
          <Button variant="ghost" className="font-medium">{t('categories.fashion')}</Button>
          <Button variant="ghost" className="font-medium">{t('categories.home')}</Button>
          <Button variant="ghost" className="font-medium">{t('categories.sports')}</Button>
          <Button variant="ghost" className="font-medium">{t('categories.books')}</Button>
          <Button variant="ghost" className="font-medium">{t('categories.beauty')}</Button>
          <Button variant="ghost" className="font-medium text-sale">
            🔥 {t('navigation.deals')}
          </Button>
        </nav>
      </div>
    </header>
  );
};
