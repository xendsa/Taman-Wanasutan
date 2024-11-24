import { useParams } from "react-router-dom";
import { Badge } from "@/components/ui/badge";
import { arsipDataDummy } from "@/utils/dummy";

export default function DetailArsip() {
  const { id } = useParams();
  const archive = arsipDataDummy.find((item) => item.id === id);

  if (!archive) {
    return <p>Archive not found.</p>;
  }

  return (
    <div className="container mx-auto px-4 py-8">
      <h2 className="text-3xl font-bold mb-6 text-center">{archive.title}</h2>
      <div className="flex justify-center">
        <img
          src={archive.src}
          alt={archive.alt}
          className="w-full max-w-4xl h-64 object-cover mb-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 sm:h-80 md:h-96 lg:h-[500px]"
        />
      </div>
      <div className="flex justify-center">
        <p className="text-lg text-gray-700 mb-6 px-4 text-center max-w-2xl">
          {archive.description}
        </p>
      </div>
      <div className="flex justify-center">
        <Badge variant="outline" className="text-gray-500 border-gray-300">
          {archive.category}
        </Badge>
      </div>
    </div>
  );
}
