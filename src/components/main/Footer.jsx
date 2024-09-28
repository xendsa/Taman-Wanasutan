
import { Instagram, Youtube } from "lucide-react";


const NavData = [
  {
    label: "Beranda",
    href: "/",
    className: "hover:underline",
  },
  {
    label: "Hewan dan Tumbuhan",
    href: "/flora-fauna",
    className: "hover:underline",
  },
  {
    label: "Arsip",
    href: "/arsip",
    className: "hover:underline",
  },
  {
    label: "Poca",
    href: "/poca",
    className: "hover:underline",
  },
];

const dataMedsos = [
  {
    label: "Instagram",
    className: "hover:text-gray-300",
    href: "https://www.instagram.com/explore/locations/101508235757475/taman-wanasutan-asri/",
    icon: <Instagram size={24} className="inline-block" />,
  },
  {
    label: "Youtube",
    className: "hover:text-gray-300",
    href: "https://www.youtube.com/watch?v=hByjT61jKgU",
    icon: <Youtube size={24} className="inline-block" />,
  },
];

export default function Footer() {
  return (
    <footer className="bg-[#1a472a] text-white py-12">
      <div className="container mx-auto px-4">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {/* Site Name */}
          <div>
            <h2 className="text-2xl font-bold mb-2">Taman</h2>
            <h2 className="text-2xl font-bold">Wanasutan Asri</h2>
          </div>

          {/* Quick Links */}
          <div>
            <h3 className="text-lg font-semibold mb-4">Quick Links</h3>
            <ul className="space-y-2">
              {NavData.map((data, index) => (
                <li key={index}>
                  <a href={data.href} className={data.className}>
                    {data.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Contact Us */}
          <div>
            <h3 className="text-lg font-semibold mb-4">Contact Us</h3>
            <p className="mb-2">
              Jl. Singosutan Barat, Sembego, Maguwoharjo, Kec. Depok, Kabupaten
              Sleman, Daerah Istimewa Yogyakarta 55281
            </p>
            <p className="mb-4">081328065492</p>
            <div className="flex space-x-4">
              {dataMedsos.map((data, index) => (
                <a href={data.href} key={index} className={data.className}>
                  {data.icon}
                </a>
              ))}
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
}
