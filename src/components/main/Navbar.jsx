/* eslint-disable react/prop-types */
/* eslint-disable no-unused-vars */
import React, { useState, useEffect } from "react"
import { Link, useLocation } from "react-router-dom"
import { Menu, Search, ChevronDown } from "lucide-react"
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Sheet, SheetContent, SheetTrigger } from "@/components/ui/sheet"

const NavItem = ({ to, children, active }) => (
  <Link
    to={to}
    className={`text-base font-semibold transition-colors hover:text-primary ${
      active ? "text-primary" : "text-gray-500"
    }`}
  >
    {children}
  </Link>
)

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
]

export default function DynamicNavbar() {
  const [isOpen, setIsOpen] = useState(false)
  const location = useLocation()

  const isActive = (to) => {
    if (to === "/" && location.pathname === "/") return true
    if (to !== "/" && location.pathname.startsWith(to)) return true
    return false
  }

  return (
    <header className="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
      <div className="container flex h-24 p-9 items-center">
        <div className="mr-4 hidden md:flex">
          <Link to="/" className="mr-6 flex items-center space-x-2">
            <img
              src="src/assets/Logo/LOGO.png"
              alt="Bali Zoo"
              className="h-auto w-20"
            />
          </Link>
          <div className="flex items-center mr-12 space-x-6 text-sm font-medium">
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
              className="hidden md:inline-flex h-8 w-[150px] lg:w-[250px]"
            />
          </div>
        </div>
      </div>
    </header>
  )
}