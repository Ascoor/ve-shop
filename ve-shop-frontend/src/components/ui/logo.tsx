import { useEffect, useState } from "react";
import { useTheme } from "next-themes";
import { useLanguageStore } from "@/store/languageStore";
import { cn } from "@/lib/utils";

export const Logo = ({ className = "" }) => {
  const { theme, resolvedTheme } = useTheme() || { theme: "light" };
  const { direction } = useLanguageStore();

  // استخدم resolvedTheme لأن بعض نسخ next-themes ترجع "system" في البداية
  const [logoSrc, setLogoSrc] = useState("/ve-logo-day.png");

  useEffect(() => {
    const currentTheme = resolvedTheme || theme || "light";
    setLogoSrc(
      currentTheme === "dark"
        ? "/ve-logo-dark.png"
        : "/ve-logo-day.png"
    );
  }, [theme, resolvedTheme]);

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
