import Hero from "@components/home/Hero";
import WanasutanProgram from "@components/home/WanasutanProgram";
import InfoCards from "@/components/home/InfoCard";
import GalleryPanel from "@components/home/GalleryPanel";
import InfoDataset from "@components/home/InfoData";

function HomePages() {
  return (
    <><div>
      <Hero />
      <WanasutanProgram />
    </div>
    <div className="absolute -mb-[10em] bottom-0 left-0 right-0  flex justify-center text-white z-10">
      <InfoCards />
    </div>
    <div>
      <GalleryPanel />
    </div>
    <div>
      <InfoDataset />
    </div></>
    

  );
}

export default HomePages;
