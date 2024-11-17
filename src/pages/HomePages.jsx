import Hero from "@components/home/Hero";
import WanasutanProgram from "@components/home/WanasutanProgram";
import GalleryPanel from "@components/home/GalleryPanel";
import InfoDataset from "@components/home/InfoData";

function HomePages() {
  return (
    <><div>
      <Hero />
      <WanasutanProgram />
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
