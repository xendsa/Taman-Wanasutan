/* eslint-disable no-unused-vars */
import React from "react";
import mapsss from "@/assets/images/mapsss.jpg";
function MapsWanasutanPage () {
    return (
        <div className="relative h-auto w-full overflow-hidden p-4">
            <div className="flex flex-col items-center justify-center">
                <h1 className="text-3xl font-bold">Taman Wanasutan</h1>
                <img src={mapsss} alt="" />
                <a
                    href={mapsss}
                    download="TamanWanasutanMap.jpg"
                    className="mt-4 inline-block rounded-lg bg-green-900 px-4 py-2 text-white hover:bg-green-700"
                >
                    Download Peta
                </a>
            </div>
        </div>
    );
}

export default MapsWanasutanPage;