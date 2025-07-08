
import { useEffect, useState } from "react";
import { useTheme } from "@/components/ui/theme-provider";
import { useLanguageStore } from "@/store/languageStore";
import { cn } from "@/lib/utils";

export const Logo = ({ className = "" }) => {
  const { theme } = useTheme();
  const getCurrentTheme = () => {
    if (theme === "system") {
      return window.matchMedia("(prefers-color-scheme: dark)").matches
        ? "dark"
        : "light";
    }
    return theme || "light";
  };
  const { direction } = useLanguageStore();

  const [logoSrc, setLogoSrc] = useState(() =>
    getCurrentTheme() === "dark" ? "/ve-logo-dark.png" : "/ve-logo-day.png"
  );

  useEffect(() => {
    setLogoSrc(
      getCurrentTheme() === "dark" ? "/ve-logo-dark.png" : "/ve-logo-day.png"
    );
  }, [theme]);

  return (
    <img
      src={logoSrc}
      alt="Ve-Shop Logo"
      key={logoSrc} // مهم لضمان إعادة تحميل الصورة عند التغيير
      className={cn(
        "w-10 h-10 sm:w-12 sm:h-12 object-contain transition-all duration-300",
        direction === "rtl" ? "ml-2" : "mr-2",
        className
      )}
      draggable={false}
    />
 
  );
};
