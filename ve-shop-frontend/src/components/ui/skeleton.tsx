import { cn } from "@/lib/utils";
import { useLanguageStore } from "@/store/languageStore";

function Skeleton({ className, ...props }: React.HTMLAttributes<HTMLDivElement>) {
  const { direction } = useLanguageStore();
  return (
    <div
      className={cn(
        "animate-pulse rounded-md bg-muted",
        direction === "rtl" ? "ml-0 mr-0" : "",
        className
      )}
      {...props}
    />
  );
}

export { Skeleton }
