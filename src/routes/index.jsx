import { Route, Routes } from "react-router-dom";
import MainLayout from "@layout/MainLayout";
import HomePages from "@pages/HomePages";
import AboutPages from "@pages/AboutPages";
import ArsipPages from "@pages/ArsipPages";
import DetailFloraPages from "@pages/detail/DetailFloraPages";
import DetailArsipPages from "@pages/detail/DetailArsipPages";
import FloraFaunaPages from "@pages/FloraFaunaPages";
import MapsWanasutanPage from "@pages/MapsWanasutanPage";

export default function AppRoutes() {
  return (
    <Routes>
      <Route path="/" element={<MainLayout />}>
        <Route index element={<HomePages />} />
        <Route path="about" element={<AboutPages />} />
        <Route path="flora-fauna" element={<FloraFaunaPages />} />
        <Route path="arsip" element={<ArsipPages />} />
        <Route path="flora-fauna/detail/:slug" element={<DetailFloraPages />} />
        <Route path="arsip/detail/:slug" element={<DetailArsipPages />} />
        <Route path="maps-wanasutan" element={<MapsWanasutanPage />} />
      </Route>
    </Routes>
  );
}
