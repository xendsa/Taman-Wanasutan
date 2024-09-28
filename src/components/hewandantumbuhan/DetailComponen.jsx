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
    <div className="container mx-auto px-4 py-8">
      <div className="overflow-hidden rounded-lg mb-6">
        <img
          src={animal.src}
          alt={animal.alt}
          className="w-full h-64 sm:h-80 md:h-96 lg:h-[500px] object-cover"
        />
      </div>

      <div className="mb-4">
        <Badge variant="default" className="cursor-pointer">
          {animal.badge}
        </Badge>
      </div>

      <div className="text-gray-700">
        <h2 className="text-2xl font-semibold mb-2">Description</h2>
        <p className="leading-relaxed">{animal.description}</p>
      </div>
    </div>
  );
}
