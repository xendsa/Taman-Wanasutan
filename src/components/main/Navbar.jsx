import { useState } from "react";
import { Menu, Search, ChevronDown } from "lucide-react";
import { Button } from "@components/ui/button";
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@components/ui/dropdown-menu";
import { Input } from "@/components/ui/input";
import { Sheet, SheetContent, SheetTrigger } from "@components/ui/sheet";

const NavItem = ({ href, children, active = false }) => (
  <a
    href={href}
    className={`text-sm font-medium transition-colors hover:text-primary ${
      active ? "text-primary" : "text-gray-500"
    }`}
  >
    {children}
  </a>
);

const NavData = [
  {
    label: "Beranda",
    href: "/",
    active: true,
  },
  {
    label: "Hewan dan Tumbuhan",
    href: "/flora-fauna",
    active: false,
  },
  {
    label: "Arsip",
    href: "/arsip",
    active: false,
  },
  {
    label: "Poca",
    href: "/poca",
    active: false,
  },
];

export default function Navbar() {
  const [isOpen, setIsOpen] = useState(false);

  return (
    <header className="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
      <div className="container flex h-24 p-9 items-center">
        <div className="mr-4 hidden md:flex">
          <a href="/" className="mr-6 flex items-center space-x-2">
            <img
              src="https://www.bali-zoo.com/_next/image?url=%2Fassets%2Fimages%2Flogo.png&w=256&q=75"
              alt="Bali Zoo"
              className="h-12 w-auto"
            />
          </a>
          <div className="flex items-center mr-12 space-x-6 text-sm font-medium">
            {NavData.map((data) => (
              <NavItem key={data.label} href={data.href} active={data.active}>
                {data.label}
              </NavItem>
            ))}
          </div>
        </div>

        <Sheet open={isOpen} onOpenChange={setIsOpen}>
          <SheetTrigger asChild>
            <Button
              variant="ghost"
              className="mr-2 px-0 text-base hover:bg-transparent focus-visible:bg-transparent focus-visible:ring-0 focus-visible:ring-offset-0 md:hidden"
            >
              <Menu className="h-5 w-5" />
              <span className="sr-only">Toggle Menu</span>
            </Button>
          </SheetTrigger>
          <SheetContent side="left" className="pr-0">
            <nav className="flex flex-col space-y-4">
              {NavData.map((data) => (
                <NavItem key={data.label} href={data.href} active={data.active}>
                  {data.label}
                </NavItem>
              ))}
            </nav>
          </SheetContent>
        </Sheet>
        <div className="flex flex-1 items-center justify-between space-x-2 md:justify-end">
          <div className="w-full flex-1 md:w-auto md:flex-none">
            <Input
              placeholder="Search..."
              className="hidden md:inline-flex h-8 w-[150px] lg:w-[250px]"
            />
          </div>
          <DropdownMenu>
            <DropdownMenuTrigger asChild>
              <Button variant="ghost" className="h-8 w-8 px-0">
                <Search className="h-4 w-4 md:hidden" />
                <span className="hidden md:inline-flex">ID</span>
                <ChevronDown className="hidden md:inline-flex ml-1 h-3 w-3" />
                <span className="sr-only">Toggle language</span>
              </Button>
            </DropdownMenuTrigger>
            <DropdownMenuContent align="end">
              <DropdownMenuItem>ID</DropdownMenuItem>
              <DropdownMenuItem>EN</DropdownMenuItem>
            </DropdownMenuContent>
          </DropdownMenu>
        </div>
      </div>
    </header>
  );
}
