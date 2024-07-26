import Card from "./components/ui/CardCommon";
import Footer from "./components/ui/Footer";
import HeroSection16 from "./components/ui/Hero";
import MegaMenuWithPlacement from "./components/ui/MegaMenu";
import BlogSection11 from "./components/ui/Section";

function App() {
  return (
    <div>
      <HeroSection16 />
      <div className="container mx-auto px-4">
        {/* <Card /> */}
        <BlogSection11 />
      </div>
      <Footer />
    </div>
  );
}

export default App;
