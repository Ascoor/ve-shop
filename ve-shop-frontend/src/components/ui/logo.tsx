import { useTheme } from "@/components/ui/theme-provider";

export const Logo = () => {
  const { theme } = useTheme();
  const isDark =
    theme === "dark" ||
    (theme === "system" && window.matchMedia("(prefers-color-scheme: dark)").matches);

  const logoSrc = isDark ? "/logo-dark.svg" : "/logo-light.svg";

  return (
    <div className="flex items-center select-none">
      <img src={logoSrc} alt="Ve-Shop logo" className="h-10 w-auto" />
    </div>
  );
};
