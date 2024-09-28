import React from "react";
import { Clock, CalendarDays, LocateFixed } from 'lucide-react';

const InfoCards = () => {
    const cards = [
        { icon: Clock, title: 'Zoo Hours', description: 'Saturday | 09.00 AM - 17.00 PM' },
        { icon: CalendarDays, title: "What's On", description: "See Today's" },
        { icon: LocateFixed, title: 'Zoo Maps', description: 'See Our Maps' }
    ];

    return (
        <div className="flex flex-col md:flex-row justify-between items-center p-6 bg-[#8affd4] text-white rounded-t-xl space-y-4 md:space-y-0 md:space-x-4">
            {cards.map((card, index) => (
                <div
                    key={index}
                    className="flex items-center justify-between bg-[#8affd4] text-white md:w-1/3 w-full p-4 rounded-lg"
                >
                    <div className="flex items-center space-x-2">
                        <div className="text-white">
                            {React.createElement(card.icon, { className: 'h-8 w-8' })}
                        </div>
                        <div>
                            <h3 className="text-xl font-bold mb-1">{card.title}</h3>
                            <p className="text-sm">{card.description}</p>
                        </div>
                    </div>
                    <div className="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="2" stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            ))}
        </div>
    );
};

export default InfoCards;
