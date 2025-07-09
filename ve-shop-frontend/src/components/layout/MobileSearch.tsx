import { useState } from "react";
import { Search } from "lucide-react";
import {
  CommandDialog,
  CommandEmpty,
  CommandGroup,
  CommandInput,
  CommandItem,
  CommandList,
} from "@/components/ui/command";
import { Button } from "@/components/ui/button";
import { useNavigate } from "react-router-dom";
import { useTranslation } from "react-i18next";
import { useLanguageStore } from "@/store/languageStore";

const products = [
  { id: "1", name: "Wireless Bluetooth Headphones with Active Noise Cancellation" },
  { id: "2", name: "Smart Fitness Watch with Heart Rate Monitor" },
  { id: "3", name: "Professional Camera Lens 50mm f/1.8" },
  { id: "4", name: "Ergonomic Office Chair with Lumbar Support" },
  { id: "5", name: "Premium Coffee Machine with Milk Frother" },
  { id: "6", name: "Mechanical Gaming Keyboard RGB Backlit" },
  { id: "7", name: "Wireless Phone Charger Stand Fast Charging" },
  { id: "8", name: "Smart Home Security Camera 1080p WiFi" },
];

export const MobileSearch = () => {
  const [open, setOpen] = useState(false);
  const [query, setQuery] = useState("");
  const navigate = useNavigate();
  const { t } = useTranslation('common');
  const { direction } = useLanguageStore();

  const filtered = query
    ? products.filter((p) =>
        p.name.toLowerCase().includes(query.toLowerCase())
      )
    : [];

  const handleSelect = (id: string) => {
    setOpen(false);
    navigate(`/product/${id}`);
  };

  return (
    <>
      <Button
        variant="ghost"
        size="icon"
        onClick={() => setOpen(true)}
        className="md:hidden"
        aria-label="Search"
      >
        <Search className="w-5 h-5" />
      </Button>
      <CommandDialog open={open} onOpenChange={setOpen}>
        <div dir={direction}>
          <CommandInput
            value={query}
            onValueChange={setQuery}
            placeholder={t('actions.search') + "..."}
            className={direction === "rtl" ? "text-right" : "text-left"}
          />
          <CommandList>
            <CommandEmpty>{t('messages.no_results')}</CommandEmpty>
            <CommandGroup>
              {filtered.map((product) => (
                <CommandItem
                  key={product.id}
                  onSelect={() => handleSelect(product.id)}
                  className={direction === "rtl" ? "text-right" : "text-left"}
                >
                  {product.name}
                </CommandItem>
              ))}
            </CommandGroup>
          </CommandList>
        </div>
      </CommandDialog>
    </>
  );
};
