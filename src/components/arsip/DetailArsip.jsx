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
      <h2 className="text-3xl font-bold mb-6">{archive.title}</h2>
      <img
        src={archive.src}
        alt={archive.alt}
        className="w-full h-64 object-cover mb-4 rounded-lg sm:h-80 md:h-96 lg:h-[500px]"
      />
      <p className="text-lg text-gray-700 mb-4">{archive.description}</p>
      <Badge variant="outline">{archive.category}</Badge>
    </div>
  );
}
