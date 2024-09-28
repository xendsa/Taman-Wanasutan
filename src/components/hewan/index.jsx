import { useState } from "react";
import { Badge } from "@/components/ui/badge";

const animals = [
  "ALL ANIMAL",
  "PENYU",
  "KUKANG",
  "LANDAK",
  "ORANG UTAN",
  "MEERKAT",
  "KUBUNG",
  "KOMODO",
  "DUBUK",
  "GAJAH",
  "BUAYA",
  "AYAM",
  "BURUNG",
  "BERUANG",
  "RUSA",
  "BINTURONG",
  "KAMBING",
  "IGUANA",
  "BAHASA JAWA",
  "SINGA",
  "KELELAWAR",
  "KUCING CARACAL",
  "BEBEK MANDARIN",
  "MONYET KECIL",
  "KANCIL",
  "MUSANG",
  "BURUNG UNTA",
  "SIAMANG",
  "MERAK",
  "PELICAN",
  "ANJING PERRY",
  "KUDA PONI SHETLAND",
  "SITATUNGA",
  "ULAR",
  "GULA GLIDER",
  "HARIMAU",
  "WALLABY",
  "BABI HUTAN",
  "ZEBRA",
];

const animalImages = [
  {
    src: "https://tanilink.com/uploads/berita/2019-04-15/40437356_1879616295466619_6493002911366543558_n.jpg",
    alt: "Orangutan",
  },
  {
    src: "https://d1bpj0tv6vfxyp.cloudfront.net/articles/7891_6-5-2021_18-27-24.webp",
    alt: "Deer",
  },
  {
    src: "https://agrotanisejahtera.co.id/wp-content/uploads/2024/02/Pohon-Hias-Ketapang-Kencana-Untuk-Penghijauan.jpg",
    alt: "Bat",
  },
  {
    src: "https://awsimages.detik.net.id/community/media/visual/2017/12/06/6414c1ae-fcd1-49a6-8316-4a71c29f93ff_43.jpg?w=600&q=90",
    alt: "Bat hanging",
  },
  {
    src: "https://warbis.id/assets/images/product/1626693084.png",
    alt: "Bear",
  },
  {
    src: "https://warbis.id/assets/images/product/1626693084.png",
    alt: "Sun Bear",
  },
  {
    src: "https://warbis.id/assets/images/product/1626693084.png",
    alt: "Guinea Fowl",
  },
  {
    src: "https://warbis.id/assets/images/product/1626693084.png",
    alt: "Porcupine",
  },
  {
    src: "https://warbis.id/assets/images/product/1626693084.png",
    alt: "Sloth",
  },
  {
    src: "https://warbis.id/assets/images/product/1626693084.png",
    alt: "Crocodile",
  },
];

export default function AnimalSection() {
  const [activeFilter, setActiveFilter] = useState("ALL ANIMAL");

  return (
    <div className="container mx-auto px-4 py-8">
      <div className="flex flex-wrap gap-x-2 gap-y-2 p-4">
        {animals.map((animal) => (
          <Badge
            key={animal}
            variant={activeFilter === animal ? "default" : "secondary"}
            className="cursor-pointer"
            onClick={() => setActiveFilter(animal)}
          >
            {animal}
          </Badge>
        ))}
      </div>

      <div className="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">
        {animalImages.map((animal, index) => (
          <div key={index} className="overflow-hidden rounded-lg">
            <img
              src={animal.src}
              alt={animal.alt}
              className="h-full w-full object-cover transition-transform duration-300 hover:scale-110"
            />
          </div>
        ))}
      </div>
    </div>
  );
}
