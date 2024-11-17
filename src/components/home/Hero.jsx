import React, { useState, useEffect } from "react";
import {
    ChevronLeft,
    ChevronRight,
    Clock, 
    CalendarDays, 
    LocateFixed,
    ChevronRight as ChevronRightIcon
} from "lucide-react";
import { Link } from "react-router-dom";
import { Button } from "@/components/ui/button";

const slides = [
    {
        image:
        "src/assets/images/IMG_4517.PNG",
        title: "MULAI PETUALANGAN",
        subtitle: "Jelajahi Keindahan Alam Bersama Satwa",
    },
    {
        image: "https://dashboard.bali-zoo.com/storage/photos/1/Home/Slider Information/Slide/Slider-3 Mobile.jpg",
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

const ZooHomepage = () => {
    const [currentSlide, setCurrentSlide] = useState(0);

    const cards = [
        { icon: Clock, title: 'Zoo Hours', description: 'Saturday | 07.00 AM - 17.00 PM' },
        { icon: CalendarDays, title: "What's On", description: "See Today's" },
        { icon: LocateFixed, title: 'Zoo Maps', description: 'See Our Maps', to: '/maps-wanasutan' }
    ];

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
        setCurrentSlide((prevSlide) => (prevSlide - 1 + slides.length) % slides.length);
    };

    return (
        <div className="relative">
            {/* Hero Section */}
            <div className="relative h-[500px] w-full overflow-hidden">
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
                        
                        <div className="absolute inset-0 bg-black/40">
                            <div className="container mx-auto h-full px-6 lg:px-16">
                                <div className="flex h-full flex-col justify-center text-white">
                                    <h1 className="mb-2 text-4xl lg:text-5xl font-bold tracking-wider">
                                        {slide.title}
                                    </h1>
                                    <p className="mb-6 text-lg lg:text-xl">
                                        {slide.subtitle}
                                    </p>
                                    <Button 
                                        className="w-40 bg-primary hover:bg-primary/90 transition-colors"
                                        variant="default"
                                    >
                                        Lebih Lanjut
                                    </Button>
                                </div>
                            </div>
                        </div>
                    </div>
                ))}

                {/* Navigation Buttons */}
                <button
                    onClick={prevSlide}
                    className="absolute left-4 top-1/2 -translate-y-1/2 rounded-full bg-white/30 p-2 text-white hover:bg-white/50 transition-colors"
                    aria-label="Previous slide"
                >
                    <ChevronLeft className="h-6 w-6" />
                </button>
                <button
                    onClick={nextSlide}
                    className="absolute right-4 top-1/2 -translate-y-1/2 rounded-full bg-white/30 p-2 text-white hover:bg-white/50 transition-colors"
                    aria-label="Next slide"
                >
                    <ChevronRight className="h-6 w-6" />
                </button>

                {/* Slide Indicators */}
                <div className="absolute bottom-28 left-1/2 flex -translate-x-1/2 space-x-2">
                    {slides.map((_, index) => (
                        <button
                            key={index}
                            onClick={() => setCurrentSlide(index)}
                            className={`h-3 w-3 rounded-full transition-colors ${
                                index === currentSlide ? "bg-white" : "bg-white/50"
                            }`}
                            aria-label={`Go to slide ${index + 1}`}
                        />
                    ))}
                </div>

                {/* Wave Overlay */}
                <div className="absolute bottom-0 left-0 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 160" className="w-full">
                        <path 
                            fill="#f5f5f5" 
                            fillOpacity="1" 
                            d="M0,64L60,80C120,96,240,128,360,138.7C480,149,600,139,720,122.7C840,107,960,85,1080,90.7C1200,96,1320,128,1380,144L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                        />
                    </svg>
                </div>
            </div>

            {/* Info Cards Section */}
            <div className="relative z-10 container mx-auto px-4 -mt-24 md:-mt-32">
                <div className="flex flex-col md:flex-row justify-between items-center p-4 bg-primary text-white rounded-[4vh] space-y-4 md:space-y-0 md:space-x-4">
                    {cards.map((card, index) => (
                        <Link
                            key={index}
                            to={card.to}
                            className="flex items-center justify-start md:justify-center bg-primary text-white lg:w-[60vh] lg:h-[20vh] md:w-1/3 w-[70vh] h-[4vh] max-w-[80vh] md:max-h-[80vh] rounded-lg"
                        >
                            <div className="flex items-center space-x-2">
                                <div className="text-white">
                                    {React.createElement(card.icon, { className: 'lg:w-[8vh] lg:h-[8vh] h-6 w-6' })}
                                </div>
                                <div>
                                    <h3 className="text-sm md:text-xl font-bold -mb-2">{card.title}</h3>
                                    <p className="md:text-sm text-[8px] flex items-center">
                                        {card.description}
                                        <ChevronRightIcon className="ml-1 w-3 lg:w-5" />
                                    </p>
                                </div>
                            </div>
                        </Link>
                    ))}
                </div>
            </div>
        </div>
    );
};

export default ZooHomepage;