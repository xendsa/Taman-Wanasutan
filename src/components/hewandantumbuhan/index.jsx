import React, { useState } from "react";
import { Badge } from "@/components/ui/badge";
import { animalDataDummy } from "@/utils/dummy";

const animals = [
  "ALL ANIMAL",
  "MONYET",
  "KURA KURA",
  "BURUNG DARA",
  "BURUNG HANTU",
];

export default function AnimalSection() {
  const [activeFilter, setActiveFilter] = useState("ALL ANIMAL");

  const filteredAnimals =
    activeFilter === "ALL ANIMAL"
      ? animalDataDummy
      : animalDataDummy.filter((animal) => animal.category === activeFilter);

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

      <div className="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
        {filteredAnimals.map((animal, index) => (
          <a
            key={index}
            href={`flora-fauna/detail/${animal.slug}`}
            className="block"
          >
            <div className="overflow-hidden rounded-lg">
              <img
                src={animal.src}
                alt={animal.alt}
                className="w-full h-48 sm:h-56 md:h-64 lg:h-72 object-cover transition-transform duration-300 hover:scale-110"
              />
            </div>
          </a>
        ))}
      </div>
    </div>
  );
}
