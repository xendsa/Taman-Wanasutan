import Footer from "@components/main/Footer";
import Navbar from "@components/main/Navbar";
import { Outlet } from "react-router-dom";

function MainLayout() {
  return (
    <div>
        <Navbar />
      <Outlet />
      <Footer />
    </div>
  );
}

export default MainLayout;
