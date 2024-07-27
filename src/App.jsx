import Header from "./components/Header/Header";
import Footer from "./components/ui/Footer";
import HeroSection16 from "./components/ui/Hero";
import BlogSection11 from "./components/ui/Section";
import WhoIsMe from "./components/WhoIsMe";

function App() {
  return (
    <>
      <Header />
      <HeroSection16 />
      <div className="container mx-auto px-4">
        <BlogSection11 />
        <WhoIsMe />
      </div>
      <Footer />
    </>
  );
}

export default App;
