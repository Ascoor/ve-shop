import { useTheme } from "next-themes"; // أو أي hook خاص بك للثيم
import { useLanguageStore } from "@/store/languageStore";

import { cn } from "@/lib/utils";

// لو ليس عندك useTheme استبدلها بمنطق theme من Zustand أو Context حسب مشروعك

export const Logo = ({ className = "" }) => {
  const { theme } = useTheme() || { theme: "light" }; // fallback if useTheme missing
  const { direction } = useLanguageStore();

  // تحديد الشعار المناسب للوضع الليلي/النهاري
  const logoSrc =
    theme === "dark"
      ? "/ve-logo-dark.png"
      : "/ve-logo-day.png";

  return (
    <img
      src={logoSrc}
      alt="Ve-Shop Logo"
      className={cn(
        "w-10 h-10 sm:w-12 sm:h-12 object-contain transition-all duration-300",
        direction === "rtl" ? "ml-2" : "mr-2",
        className
      )}
      draggable={false}
    />
  );
};
