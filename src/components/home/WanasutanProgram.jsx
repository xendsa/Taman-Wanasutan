/* eslint-disable no-unused-vars */
import React, { useEffect, useState } from "react";

const works = [
    {
        title: "Ornella Binni",
        description: "Pengalaman sekali seumur hidup! Sarapan memang hal biasa tapi sarapan bersama orangutan? Itu baru luar biasa.",
        art: "https://images.unsplash.com/photo-1465869185982-5a1a7522cbcb?auto=format&fit=crop&w=600&q=80",
    },
    {
        title: "Tom Byrom",
        description: "Ayo mulai hari dengan sarapan bersama Orangutan yang bermain di sekitar kalian.",
        art: "https://images.unsplash.com/photo-1548516173-3cabfa4607e9?auto=format&fit=crop&w=600&q=80",
    },
    {
        title: "Vladimir Malyavko",
        description: "Jangan lewatkan momen sarapan bersama hewan ikonik ini di Bali Zoo.",
        art: "https://images.unsplash.com/photo-1494337480532-3725c85fd2ab?auto=format&fit=crop&w=600&q=80",
    },
];

function WanasutanProgram() {
    const [currentIndex, setCurrentIndex] = useState(0);

    useEffect(() => {
        const intervalId = setInterval(() => {
            setCurrentIndex((prevIndex) => (prevIndex + 1) % works.length);
        }, 3000);

        return () => clearInterval(intervalId);
    }, []);

    return (
        <div className="relative w-full px-8 mx-auto overflow-hidden ">
            <div className="flex flex-col justify-center items-center h-64 py-8 space-y-2">
                <h3 className="text-xl md:text-2xl font-bold">Taman Wanasutan</h3>
                <p className="text-xs md:text-base text-center px-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam ea veritatis blanditiis aut ex temporibus similique magnam vero, ratione beatae iusto iste ullam rerum ab assumenda id adipisci neque error?
                </p>
            </div>

            <div 
                className="flex transition-transform duration-300 ease-in-out"
                style={{ transform: `translateX(-${currentIndex * 100}%)` }}
            >
                {works.map((artwork) => (
                    <div key={artwork.title} className="min-w-full h-[85vh] relative"> {/* Make the container relative */}
                        <img
                            src={artwork.art}
                            alt={`Photo by ${artwork.title}`}
                            className="object-cover w-full h-full"
                        />
                        <div className="absolute bottom-0 left-0 p-4 text-center text-white w-full">
                            <h3 className="text-lg font-semibold">{artwork.title}</h3>
                            <p className="text-sm">{artwork.description}</p>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
}

export default WanasutanProgram;
