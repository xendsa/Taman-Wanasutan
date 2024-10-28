import React, { useRef } from 'react';
import { Star, ChevronLeft, ChevronRight } from 'lucide-react';

export default function Component() {
  const scrollRef = useRef(null); // Referensi untuk kontainer scroll

  // Fungsi untuk menggeser ke kiri
  const scrollLeft = () => {
    scrollRef.current.scrollBy({
      top: 0,
      left: -200, // Geser 200px ke kiri
      behavior: 'smooth', // Smooth scroll
    });
  };

  // Fungsi untuk menggeser ke kanan
  const scrollRight = () => {
    scrollRef.current.scrollBy({
      top: 0,
      left: 200, // Geser 200px ke kanan
      behavior: 'smooth', // Smooth scroll
    });
  };

  return (
    <div className="bg-green-50 min-h-screen">
      {/* Hero Section */}
      <div
        className="relative h-[400px] bg-cover bg-center"
        style={{
          backgroundImage: "url('https://images.pexels.com/photos/1370295/pexels-photo-1370295.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')",
          backgroundSize: 'cover',
          backgroundPosition: 'center',
        }}
      >
        <div className="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
          <h1 className="text-white text-4xl md:text-6xl font-bold text-center">
            Taman Wanasutan Asri
            <br />
            Pojok Baca
          </h1>
        </div>
      </div>

      {/* Apa Itu Pojok Baca Section */}
      <div className="container mx-auto px-4 py-12">
        <h2 className="text-3xl font-bold mb-6">Apa Itu Pojok Baca?</h2>
        <p className="text-gray-700">
          Pojok Baca di Taman Wanasutan Asri merupakan ruang edukasi yang disediakan untuk mengakomodasi minat baca
          masyarakat. Berada di tengah taman yang asri dan hijau, Pojok Baca ini menyediakan berbagai jenis buku yang dapat
          dinikmati oleh semua kalangan. Tidak ada syarat atau biaya untuk menggunakan fasilitas ini. Pengunjung dapat langsung
          datang ke Pojok Baca ini untuk membaca buku, belajar atau sekadar bersantai sambil menikmati pemandangan alam.
        </p>
      </div>

      {/* Fasilitas Pojok Baca Section */}
      <div className="bg-green-100 py-12">
        <div className="container mx-auto px-4">
          <h2 className="text-3xl font-bold mb-12 text-center">Fasilitas Pojok Baca</h2>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {[
              { icon: 'book', title: 'Koleksi Dinasaurus', description: 'Di Taman Wanasutan Asri kami menyediakan koleksi khusus Dinosaurus yang menarik bagi pengunjung dari berbagai usia yang penasaran akan jejak peradaban purba.' },
              { icon: 'book-open', title: 'Buku Anak-Anak', description: 'Di Pojok Baca Taman Wanasutan Asri anak-anak dapat membaca koleksi buku yang dirancang khusus untuk mengembangkan imajinasi dan keterampilan literasi mereka.' },
              { icon: 'music', title: 'Karaoke Keluarga', description: 'Fasilitas Karaoke di Taman Wanasutan Asri adalah tempat yang sempurna untuk bersenang-senang bersama keluarga. Fasilitas karaoke ini dilengkapi dengan sistem suara berkualitas tinggi dan koleksi lagu yang beragam dari lagu anak-anak hingga lagu hits terkini.' },
            ].map((item, index) => (
              <div key={index} className={`p-6 rounded-lg ${index === 1 ? 'bg-green-700 text-white' : 'bg-white'}`}>
                <div className="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-green-200 rounded-full">
                  <Star className="w-8 h-8 text-green-700" />
                </div>
                <h3 className="text-xl font-semibold mb-2 text-center">{item.title}</h3>
                <p className="text-center">{item.description}</p>
              </div>
            ))}
          </div>
        </div>
      </div>

      {/* New Release Books Section */}
      <div className="container mx-auto px-4 py-12">
        <h2 className="text-3xl font-bold mb-6">New Release Books</h2>
        <p className="mb-8 text-gray-600">1000+ books are published by different authors everyday.</p>
        <div className="relative">
          <div ref={scrollRef} className="flex overflow-x-scroll pb-8 hide-scroll-bar">
            {[...Array(8)].map((_, index) => (
              <div key={index} className="flex-none w-48 mr-6">
                <img
                  src="/placeholder.svg?height=250&width=180"
                  alt={`Book cover ${index + 1}`}
                  className="w-full h-64 object-cover mb-2 rounded"
                />
                <h3 className="font-semibold mb-1">The Mind Connection</h3>
                <p className="text-sm text-gray-600 mb-1">Joyce Meyer</p>
                <div className="flex items-center">
                  {[...Array(5)].map((_, i) => (
                    <Star key={i} className="w-4 h-4 text-green-400" />
                  ))}
                </div>
              </div>
            ))}
          </div>
          <button
            onClick={scrollLeft}
            className="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md"
          >
            <ChevronLeft className="w-6 h-6 text-gray-600" />
          </button>
          <button
            onClick={scrollRight}
            className="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md"
          >
            <ChevronRight className="w-6 h-6 text-gray-600" />
          </button>
        </div>
      </div>

      {/* Featured Book Section */}
      <div className="bg-gray-100 py-12">
        <div className="container mx-auto px-4 flex flex-col md:flex-row items-center">
          <div className="md:w-1/3 mb-8 md:mb-0">
            <img src="/placeholder.svg?height=400&width=300" alt="Featured book cover" className="w-full max-w-sm mx-auto rounded-lg shadow-lg" />
          </div>
          <div className="md:w-2/3 md:pl-12">
            <h2 className="text-2xl font-semibold mb-2">Featured Book of the week</h2>
            <h3 className="text-3xl font-bold mb-4">Birds gonna be happy</h3>
            <div className="flex items-center mb-4">
              {[...Array(4)].map((_, i) => (
                <Star key={i} className="w-5 h-5 text-green-400" />
              ))}
              <Star className="w-5 h-5 text-gray-300" />
            </div>
            <p className="text-gray-600 mb-6">
              Jump start your book reading by quickly going through the popular book categories. 1000+ books are published by different authors every day. Buy your favorite books on TreeBooks Today.
            </p>
            <button className="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition duration-300">
              VIEW MORE
            </button>
          </div>
        </div>
      </div>

      <style jsx>{`
        .hide-scroll-bar {
          -ms-overflow-style: none;
          scrollbar-width: none;
        }
        .hide-scroll-bar::-webkit-scrollbar {
          display: none;
        }
      `}</style>
    </div>
  );
}
