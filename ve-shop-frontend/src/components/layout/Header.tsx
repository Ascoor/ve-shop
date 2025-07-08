import { Search, ShoppingCart, Heart } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Badge } from "@/components/ui/badge";
import { ThemeToggle } from "@/components/ui/theme-toggle";
import { LanguageSwitcher } from "@/components/ui/language-switcher";
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

  return (
    <header
      dir={direction}
      className={cn(
        "sticky top-0 z-50 bg-background/95 backdrop-blur-sm border-b border-border",
        direction
      )}
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
        <div
          className={cn(
            "flex items-center justify-between gap-2 sm:gap-4 flex-wrap",
            direction === "rtl" && "flex-row-reverse"
          )}
        >
          {/* Logo & Title */}
          <div className={cn(
            "flex items-center gap-2 min-w-[120px] sm:min-w-[160px]",
            direction === "rtl" ? "flex-row-reverse" : "flex-row"
          )}>
            {/* ذهبي وتدرج احترافي */}
            <div className="w-9 h-9 sm:w-12 sm:h-12 bg-gradient-to-br from-yellow-300 via-amber-500 to-yellow-700 shadow-md rounded-xl flex items-center justify-center">
              <span
                className="font-extrabold text-2xl sm:text-3xl bg-clip-text text-transparent bg-gradient-to-br from-yellow-300 via-amber-400 to-yellow-700 drop-shadow-[0_2px_8px_rgba(255,215,0,0.25)]"
                style={{
                  letterSpacing: '2px',
                  textShadow: '0 2px 8px #FFD700'
                }}
              >
                V
              </span>
            </div>
            <span className="text-xl sm:text-2xl font-extrabold bg-clip-text text-transparent bg-gradient-to-br from-yellow-400 via-yellow-600 to-yellow-800 tracking-wide uppercase select-none"
              style={{
                textShadow: '0 2px 8px #FFD700'
              }}
            >
              Ve-Shop
            </span>
          </div>

          {/* Search bar: hidden on xs, full width on md+ */}
          <div className="hidden md:block flex-1 max-w-2xl mx-4">
            <div className="relative">
              <Search
                className={cn(
                  "absolute top-1/2 -translate-y-1/2 text-muted-foreground w-5 h-5",
                  direction === "rtl" ? "right-3" : "left-3"
                )}
              />
              <Input
                placeholder={t('actions.search') + "..."}
                dir={direction}
                className={cn(
                  "py-3 w-full bg-muted/50 border-none focus:bg-background focus:ring-2 focus:ring-primary/20 text-base sm:text-lg",
                  direction === "rtl" ? "pr-10 pl-4" : "pl-10 pr-4"
                )}
              />
            </div>
          </div>

          {/* Actions */}
          <div className={cn(
            "flex items-center gap-1 sm:gap-2",
            direction === "rtl" ? "flex-row-reverse" : "flex-row"
          )}>
            {/* Mobile menu (only on xs) */}
            <div className="flex md:hidden">
              <MobileMenu />
            </div>
            {/* Wishlist */}
            <Button
              variant="ghost"
              size="icon"
              className="relative"
              aria-label="Wishlist"
            >
              <Heart className="w-5 h-5" />
              {wishlistCount > 0 && (
                <Badge
                  variant="secondary"
                  className="absolute -top-2 -right-2 h-5 w-5 flex items-center justify-center p-0 text-xs"
                >
                  {wishlistCount}
                </Badge>
              )}
            </Button>
            {/* Notifications */}
            <NotificationCenter />
            {/* Cart */}
            <Button
              variant="ghost"
              size="icon"
              className="relative"
              onClick={() => navigate('/checkout')}
              aria-label="Cart"
            >
              <ShoppingCart className="w-5 h-5" />
              {cartCount > 0 && (
                <Badge
                  variant="secondary"
                  className="absolute -top-2 -right-2 h-5 w-5 flex items-center justify-center p-0 text-xs"
                >
                  {cartCount}
                </Badge>
              )}
            </Button>
            {/* Mobile search */}
            <div className="md:hidden">
              <MobileSearch />
            </div>
            {/* Account/Profile Dropdown */}
            <AccountDropdown />
            {/* Theme Toggle */}
            <ThemeToggle />
            {/* Language Switcher */}
            <LanguageSwitcher />
          </div>
        </div>

        {/* Navigation: hidden on xs, row/justify direction based on language */}
        <nav
          className={cn(
            "hidden md:flex items-center gap-4 sm:gap-6 mt-4 pt-4 border-t border-border text-base",
            direction === "rtl" ? "justify-end" : "justify-start"
          )}
        >
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
