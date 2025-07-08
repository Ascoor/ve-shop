import { useTheme } from "@/components/ui/theme-provider";

export const Logo = () => {
  const { theme } = useTheme();
  const isDark =
    theme === "dark" ||
    (theme === "system" && window.matchMedia("(prefers-color-scheme: dark)").matches);

  return (
    <div className="flex items-center gap-2 select-none">
      <div className="w-10 h-10 bg-gradient-primary rounded-lg flex items-center justify-center">
        <span className="text-white font-bold text-xl">V</span>
      </div>
      {isDark ? (
        <h1 className="text-2xl font-bold text-white">Ve-Shop</h1>
      ) : (
        <h1 className="text-2xl font-bold bg-gradient-primary bg-clip-text text-transparent">
          Ve-Shop
        </h1>
      )}
    </div>
  );
};
