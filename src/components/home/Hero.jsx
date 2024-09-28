import { useState, useEffect } from "react";
import {
  ChevronLeft,
  ChevronRight,
} from "lucide-react";
import { Button } from "@/components/ui/button";
import InfoCards from "@/components/home/InfoCard";

const slides = [
  {
    image:
      "https://awsimages.detik.net.id/community/media/visual/2017/12/06/6414c1ae-fcd1-49a6-8316-4a71c29f93ff_43.jpg?w=600&q=90",
    title: "MULAI PETUALANGAN",
    subtitle: "Jelajahi Keindahan Alam Bersama Satwa",
  },
  {
    image: "https://warbis.id/assets/images/product/1626693084.png",
    title: "TEMUKAN KEAJAIBAN",
    subtitle: "Lihat Hewan Eksotis dari Dekat",
  },
  {
    image:
      "https://images.unsplash.com/photo-1518623489648-a173ef7824f3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2762&q=80",
    title: "BELAJAR DAN BERMAIN",
    subtitle: "Edukasi Satwa untuk Semua Usia",
  },
];

export default function Hero() {
  const [currentSlide, setCurrentSlide] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentSlide((prevSlide) => (prevSlide + 1) % slides.length);
    }, 5000);
    return () => clearInterval(timer);
  }, []);

  const nextSlide = () => {
    setCurrentSlide((prevSlide) => (prevSlide + 1) % slides.length);
  };

  const prevSlide = () => {
    setCurrentSlide(
      (prevSlide) => (prevSlide - 1 + slides.length) % slides.length
    );
  };

  return (
    <div className="relative h-[600px] w-full overflow-hidden">
      {slides.map((slide, index) => (
        <div
          key={index}
          className={`absolute inset-0 transition-opacity duration-1000 ${
            index === currentSlide ? "opacity-100" : "opacity-0"
          }`}
        >
          <img
            src={slide.image}
            alt={slide.title}
            className="h-full w-full object-cover"
          />
          <div className="absolute inset-0 bg-black bg-opacity-40">
            <div className="container mx-auto h-full px-4">
              <div className="flex h-full flex-col justify-center text-white">
                <h1 className="mb-2 text-5xl font-bold">{slide.title}</h1>
                <p className="mb-4 text-xl">{slide.subtitle}</p>
                <Button className="w-40 bg-primary hover:bg-primary">
                  Lebih Lanjut
                </Button>
              </div>
            </div>
          </div>
        </div>
      ))}

      <button
        onClick={prevSlide}
        className="absolute left-4 top-1/2 -translate-y-1/2 rounded-full bg-white/30 p-2 text-white hover:bg-white/50"
      >
        <ChevronLeft className="h-6 w-6" />
      </button>
      <button
        onClick={nextSlide}
        className="absolute right-4 top-1/2 -translate-y-1/2 rounded-full bg-white/30 p-2 text-white hover:bg-white/50"
      >
        <ChevronRight className="h-6 w-6" />
      </button>

      <div className="absolute bottom-20 left-1/2 flex -translate-x-1/2 space-x-2">
        {slides.map((_, index) => (
          <button
            key={index}
            onClick={() => setCurrentSlide(index)}
            className={`h-3 w-3 rounded-full ${
              index === currentSlide ? "bg-white" : "bg-white/50"
            }`}
          />
        ))}
      </div>

      <div className="absolute bottom-0 left-0 right-0 flex justify-center  text-white z-10">
        <InfoCards />
      </div>


      <div className="absolute right-0 top-0 bg-[#ff9800] px-4 py-2 text-white">
        PESAN SEKARANG
      </div>
    </div>
  );
}
