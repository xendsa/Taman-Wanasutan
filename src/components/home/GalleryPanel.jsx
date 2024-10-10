/* eslint-disable no-unused-vars */
import React, { useState } from "react";
import { animalDataDummy } from "@/utils/dummy"; 
import { useNavigate } from "react-router-dom"; 

const GalleryPanel = () => {
  const [isFlipped, setFlipped] = useState(null);
  const navigate = useNavigate(); 

  const handleFlip = (index) => {
    setFlipped(isFlipped === index ? null : index);
  };

  const handleNavigation = () => {
    navigate("/about");
  };

  return (
    <div className="w-screen h-auto ">
      <div className="grid grid-cols-2 md:grid-cols-4 w-full">
        {animalDataDummy.slice(0, 7).map((animal, index) => (
          <div
            key={animal.slug || index}
            className="relative w-full h-72 perspective"
            onClick={() => handleFlip(index)}
          >
            <div className={`flip-card ${isFlipped === index ? "flipped" : ""}`}>
              <div className="flip-card-inner">
                {/* Front Card: Image */}
                <div className="flip-card-front bg-gray-100">
                  <img
                    src={animal.src}
                    alt={animal.alt}
                    className="w-full h-full object-cover"
                  />
                </div>

                {/* Back Card: Title & Description */}
                <div className="flip-card-back bg-amber-500 p-5 flex flex-col justify-center items-left">
                  <h3 className="text-4xl font-bold mb-3 text-slate-50">{animal.title}</h3>
                  <p className="text-sm text-slate-100 line-clamp-6">{animal.description}</p>
                </div>
              </div>
            </div>
          </div>
        ))}

        {/* nice card */}
        <div
          className="relative w-full h-72 perspective cursor-pointer"
          onClick={handleNavigation} 
        >
          <div className="bg-[rgba(50,209,220,0.8)] w-full p-9 h-full flex flex-col justify-center items-left">
            <h3 className="text-3xl mb3 font-bold text-slate-50">Find at more</h3>
            <p className="text-3xl font-bold text-slate-50">@TamanDino</p>
          </div>
        </div>

      </div>
    </div>
  );
};

export default GalleryPanel;
