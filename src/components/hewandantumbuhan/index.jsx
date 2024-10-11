import { useState } from "react";
import { Badge } from "@/components/ui/badge";
import { animalDataDummy } from "@/utils/dummy";

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
        {animalDataDummy.map((animal, index) => (
          <a key={index} href={`flora-fauna/detail/${animal.slug}`}>
            <div className="overflow-hidden rounded-lg">
              <img
                src={animal.src}
                alt={animal.alt}
                className="h-64 w-full object-cover transition-transform duration-300 hover:scale-110"
              />
            </div>
          </a>
        ))}
      </div>
    </div>
  );
}
