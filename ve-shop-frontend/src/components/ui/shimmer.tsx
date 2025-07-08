import { cn } from "@/lib/utils";
import { useLanguageStore } from "@/store/languageStore";

export const Shimmer = ({ className = "" }: { className?: string }) => {
  const { direction } = useLanguageStore();
  return (
    <div
      className={cn(
        "relative overflow-hidden bg-muted rounded-md",
        className
      )}
    >
      <div
        className={cn(
          "absolute inset-0 bg-gradient-to-r from-transparent via-primary/20 to-transparent animate-[shimmer_1.5s_infinite]",
          direction === "rtl" ? "-translate-x-full" : "translate-x-full"
        )}
      />
    </div>
  );
};
