/* eslint-disable no-unused-vars */
import React from "react";
import { plantsData } from "@/utils/dataTanaman";
import { animalDataDummy } from "@/utils/dummy";

const InfoDataset = () => {
    const animalCount = animalDataDummy.length;
    const totalPlantAmount = plantsData.reduce((total, plant) => total + plant.amount, 0);

    return (
        <div className="bg-cover bg-center text-white py-10" style={{ backgroundImage: "url('/path/to/your/background-image.jpg')" }}>
            <div className="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <h2 className="text-5xl text-slate-900 font-extrabold">{animalCount}+ </h2>
                    <p className="text-orange-500 text-xl mt-2 font-semibold">Animals</p>
                </div>
                <div>
                    <h2 className="text-5xl text-slate-900 font-extrabold">{totalPlantAmount}+ </h2>
                    <p className="text-orange-500 text-xl mt-2 font-semibold">Plants</p>
                </div>
                <div>
                    <h2 className="text-5xl text-slate-900 font-extrabold">20+</h2>
                    <p className="text-orange-500 text-xl mt-2 font-semibold">Years Experience</p>
                </div>
                <div>
                    <h2 className="text-5xl text-slate-900 font-extrabold">12+</h2>
                    <p className="text-orange-500 text-xl mt-2 font-semibold">Hectares</p>
                </div>
            </div>
        </div>
    );
};

export default InfoDataset;
