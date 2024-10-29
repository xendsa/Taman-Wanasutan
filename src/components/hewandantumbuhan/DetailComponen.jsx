import React from "react";
import { useParams } from "react-router-dom";
import { Badge } from "@/components/ui/badge";
import { animalDataDummy } from "@/utils/dummy";

export default function DetailComponent() {
  const { slug } = useParams();

  const animal = animalDataDummy.find((item) => item.slug === slug);

  if (!animal) {
    return <div>Animal not found</div>;
  }

  return (
    <div className="container mx-auto px-4 py-12">
      <div className="flex flex-col items-center">
        <div className="max-w-3xl w-full">
          <div className="overflow-hidden rounded-lg">
            <img
              src={animal.src}
              alt={animal.alt}
              className="w-full h-80 sm:h-96 md:h-[500px] object-cover"
            />
          </div>
          <h2 className="text-3xl font-bold text-center mt-8 mb-4">
            {animal.title}
          </h2>
          <div className="flex justify-center mb-6">
            <Badge variant="default" className="mr-2">
              {animal.badge}
            </Badge>
            {animal.category && (
              <Badge variant="secondary">{animal.category}</Badge>
            )}
          </div>
          <p className="text-gray-700 leading-relaxed">{animal.description}</p>
        </div>
      </div>
    </div>
  );
}
