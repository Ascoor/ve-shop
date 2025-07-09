import * as React from "react";
import { cn } from "@/lib/utils";

/**
 * Utility component for screen reader only content. Mirrors
 * Radix's `<VisuallyHidden>` to avoid needing the package.
 */
export const VisuallyHidden = React.forwardRef<
  HTMLSpanElement,
  React.HTMLAttributes<HTMLSpanElement>
>(({ className, ...props }, ref) => (
  <span ref={ref} className={cn("sr-only", className)} {...props} />
));
VisuallyHidden.displayName = "VisuallyHidden";
