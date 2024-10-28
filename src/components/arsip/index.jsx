import { useState } from "react";
import { Badge } from "@/components/ui/badge";
import { motion } from "framer-motion";
import { arsipDataDummy } from "@/utils/dummy";

const archives = ["Semua Arsip", "Kegiatan Taman", "Kolaborasi KKN"];

const archiveData = [
  {
    id: 1,
    title: "Senam Pagi",
    category: "Kegiatan Taman",
    image: "/placeholder.svg?height=200&width=300",
  },
  {
    id: 2,
    title: "Karaoke Bersama",
    category: "Kegiatan Taman",
    image: "/placeholder.svg?height=200&width=300",
  },
  {
    id: 3,
    title: "Kolaborasi KKN",
    category: "Kolaborasi KKN",
    image: "/placeholder.svg?height=200&width=300",
  },
  {
    id: 4,
    title: "Penanaman Bibit Pohon",
    category: "Kolaborasi KKN",
    image: "/placeholder.svg?height=200&width=300",
  },
  {
    id: 5,
    title: "Open Donasi Buku",
    category: "Kolaborasi KKN",
    image: "/placeholder.svg?height=200&width=300",
  },
];

// Perbaiki penggabungan data dengan memastikan pencocokan data
const mergedArchiveData = archiveData.map((archive) => {
  const dummyData = arsipDataDummy.find(
    (item) =>
      item.title === archive.title ||
      item.alt.toLowerCase() === archive.title.toLowerCase()
  );

  return {
    ...archive,
    description: dummyData?.description || "",
    src: dummyData?.src || archive.image,
    alt: dummyData?.alt || archive.title,
  };
});

export default function ArchiveSection() {
  const [activeFilter, setActiveFilter] = useState("Semua Arsip");

  const filteredArchives =
    activeFilter === "Semua Arsip"
      ? mergedArchiveData
      : mergedArchiveData.filter((item) => item.category === activeFilter);

  return (
    <div className="container mx-auto px-4 py-8">
      <h2 className="text-3xl font-bold mb-6 text-center">Arsip Taman</h2>
      <div className="flex flex-wrap justify-center gap-2 mb-8">
        {archives.map((archive) => (
          <Badge
            key={archive}
            variant={activeFilter === archive ? "default" : "secondary"}
            className="cursor-pointer text-sm px-4 py-2 transition-all duration-300 hover:scale-105"
            onClick={() => setActiveFilter(archive)}>
            {archive}
          </Badge>
        ))}
      </div>

      <motion.div
        className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6"
        initial={{ opacity: 0 }}
        animate={{ opacity: 1 }}
        transition={{ duration: 0.5 }}>
        {filteredArchives.map((arsip) => (
          <a
            key={arsip.id}
            href={`/arsip/detail/${arsip.id}`}
            layout
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            exit={{ opacity: 0 }}
            transition={{ duration: 0.5 }}
            className="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 bg-white">
            <img
              src={arsip.src}
              alt={arsip.alt}
              className="w-full h-48 object-cover"
            />
            <div className="p-4">
              <h3 className="font-semibold text-lg mb-2">{arsip.title}</h3>
              <p className="text-sm text-gray-600 mb-4">{arsip.description}</p>
              <Badge variant="outline">{arsip.category}</Badge>
            </div>
          </a>
        ))}
      </motion.div>
    </div>
  );
}
