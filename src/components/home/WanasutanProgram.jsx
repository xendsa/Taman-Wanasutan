/* eslint-disable no-unused-vars */
import React, { useEffect, useState } from "react";

const works = [
    {
        title: "Ornella Binni",
        description: "Pengalaman sekali seumur hidup! Sarapan memang hal biasa tapi sarapan bersama orangutan? Itu baru luar biasa.",
        art: "https://www.bali-zoo.com/_next/image?url=https%3A%2F%2Fdashboard.bali-zoo.com%2Fstorage%2Fphotos%2F1%2FHome%2FHighlights%2FBWO%20Desktop.jpg&w=1920&q=75",
    },
    {
        title: "Tom Byrom",
        description: "Ayo mulai hari dengan sarapan bersama Orangutan yang bermain di sekitar kalian.",
        art: "https://www.bali-zoo.com/_next/image?url=https%3A%2F%2Fdashboard.bali-zoo.com%2Fstorage%2Fphotos%2F1%2FHome%2FHighlights%2FEMF%20Desktop.jpg&w=1920&q=75",
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
        <div className="relative w-full mx-auto overflow-hidden ">
            <div className="flex flex-col justify-center items-center h-64 py-8 space-y-2">
                <h3 className="text-xl text-amber-500 md:text-2xl font-bold">Our Galery View</h3>
                <p className="text-xs md:text-base text-center px-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam ea veritatis blanditiis aut ex temporibus similique magnam vero, ratione beatae iusto iste ullam rerum ab assumenda id adipisci neque error?
                </p>
            </div>

            <div className="flex transition-transform duration-300 ease-in-out"
                style={{ transform: `translateX(-${currentIndex * 100}%)` }} >
                {works.map((artwork) => (
                    <div key={artwork.title} className="min-w-full h-[83vh] relative">
                        <img
                            src={artwork.art}
                            alt={`Photo by ${artwork.title}`}
                            className="object-cover w-full h-full"
                        />
                        <div className="absolute bottom-0 left-0 right-0 py-28 lg:py-28 bg-gradient-to-t from-[#000] text-center">
                            <h3 className="text-4xl text-amber-500 font-bold pb-10 glow">{artwork.title}</h3>
                            <p className="text-sm text-white">{artwork.description}</p>
                        </div>
                    </div>
                ))}
            </div>

        </div>
    );
}

export default WanasutanProgram;
