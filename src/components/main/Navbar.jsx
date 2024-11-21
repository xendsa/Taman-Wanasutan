import React, { useState } from "react";
import { Link, useLocation } from "react-router-dom";
import { Menu } from "lucide-react";
import { Button } from "@/components/ui/button";
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/components/ui/dropdown-menu";
import { Input } from "@/components/ui/input";
import { Sheet, SheetContent, SheetTrigger } from "@/components/ui/sheet";

// Impor gambar lokal
import Logo from "@/assets/Logo/Logo.png";

const NavItem = ({ to, children, active }) => (
  <Link
    to={to}
    className={`text-sm font-medium transition-colors hover:text-primary ${
      active ? "text-primary" : "text-gray-500"
    }`}
  >
    {children}
  </Link>
);

const NavData = [
  {
    label: "Beranda",
    to: "/",
  },
  {
    label: "Hewan dan Tumbuhan",
    to: "/flora-fauna",
  },
  {
    label: "Arsip",
    to: "/arsip",
  },
  {
    label: "Poca",
    to: "/poca",
  },
];

export default function DynamicNavbar() {
  const [isOpen, setIsOpen] = useState(false);
  const location = useLocation();

  const isActive = (to) => {
    if (to === "/" && location.pathname === "/") return true;
    if (to !== "/" && location.pathname.startsWith(to)) return true;
    return false;
  };

  return (
    <header className="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
      <div className="container flex h-24 items-center p-9">
        <div className="mr-4 hidden md:flex">
          <Link to="/" className="mr-6 flex items-center space-x-2">
            <img
              src={Logo}
              alt="Logo"
              className="h-auto w-20"
            />
          </Link>
          <div className="flex items-center space-x-6 text-sm font-medium">
            {NavData.map((data) => (
              <NavItem
                key={data.label}
                to={data.to}
                active={isActive(data.to)}
              >
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
                <NavItem
                  key={data.label}
                  to={data.to}
                  active={isActive(data.to)}
                >
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
              className="hidden h-8 w-[150px] md:inline-flex lg:w-[250px]"
            />
          </div>
        </div>
      </div>
    </header>
  );
}
