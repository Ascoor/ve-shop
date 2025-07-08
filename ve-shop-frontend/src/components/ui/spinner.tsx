import { cn } from "@/lib/utils";
import { useLanguageStore } from "@/store/languageStore";

export const Spinner = ({ className = "h-6 w-6" }: { className?: string }) => {
  const { direction } = useLanguageStore();
  return (
    <span
      className={cn(
        "inline-block border-2 border-primary border-t-transparent rounded-full animate-spin",
        direction === "rtl" ? "-scale-x-100" : "",
        className
      )}
    />
  );
};
