import React from "react";
import { Link } from "react-router-dom";
import { Clock, CalendarDays, LocateFixed } from "lucide-react";

const InfoCards = () => {
    const cards = [
        { icon: Clock, title: "Zoo Hours", description: "Saturday | 09.00 AM - 17.00 PM" },
        { icon: CalendarDays, title: "What's On", description: "See Today's" },
        { icon: LocateFixed, title: "Zoo Maps", description: "See Our Maps", link: "/maps-wanasutan" },
    ];

    return (
        <div className="flex flex-col md:flex-row flex-wrap justify-between items-center p-4 md:p-6 bg-primary text-white rounded-lg space-y-4 md:space-y-0 md:space-x-4 mb-8 max-w-[900px] mx-auto">
            {cards.map((card, index) => (
                <Link
                    key={index}
                    to={card.link || "#"}
                    className="flex items-center justify-between bg-primary text-white w-full md:w-auto p-3 md:p-4 rounded-lg shadow-md hover:bg-primary-dark transition-colors min-w-[200px]"
                >
                    <div className="flex items-center space-x-3 md:space-x-4">
                        <div className="text-white">
                            {React.createElement(card.icon, { className: "w-6 h-6 md:w-8 md:h-8" })}
                        </div>
                        <div>
                            <h3 className="text-sm md:text-base font-bold">{card.title}</h3>
                            <p className="text-xs md:text-sm">{card.description}</p>
                        </div>
                    </div>
                    <div className="text-white">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            strokeWidth="2"
                            stroke="currentColor"
                            className="w-5 h-5 md:w-6 md:h-6"
                        >
                            <path strokeLinecap="round" strokeLinejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </Link>
            ))}
        </div>
    );
};

export default InfoCards;
