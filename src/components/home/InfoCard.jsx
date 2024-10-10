import React from "react";
import { Clock, CalendarDays, LocateFixed } from 'lucide-react';

const InfoCards = () => {
    const cards = [
        { icon: Clock, title: 'Zoo Hours', description: 'Saturday | 09.00 AM - 17.00 PM' },
        { icon: CalendarDays, title: "What's On", description: "See Today's" },
        { icon: LocateFixed, title: 'Zoo Maps', description: 'See Our Maps' }
    ];

    return (
        <div className="flex flex-col md:flex-row justify-between items-center p-6 bg-primary text-white rounded-[9vh] space-y-4 md:space-y-0 md:space-x-4">
            {cards.map((card, index) => (
                <div
                    key={index}
                    className="flex items-center justify-start bg-primary text-white lg:w-[60vh] lg:h-[20vh] md:w-1/3 w-[70vh] h-[4vh]  max-w-[80vh] md:max-h-[80vh] rounded-lg"
                >
                    <div className="flex items-center space-x-2 ">
                        <div className="text-white ">
                            {React.createElement(card.icon, { className: 'lg:w-[8vh] lg:h-[8vh] h-4 w-4' })}
                        </div>
                        <div>
                            <h3 className="text-sm md:text-xl font-bold mb-1">{card.title}</h3>
                            <p className="md:text-sm text-[8px]">{card.description}</p> 
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
