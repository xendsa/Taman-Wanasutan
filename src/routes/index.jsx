import { Route, Routes } from "react-router-dom";
import MainLayout from "@layout/MainLayout";
import HomePages from "@pages/HomePages";
import AboutPages from "@pages/AboutPages";
import FloraPages from "@pages/FloraPages";
import FaunaPages from "@pages/FaunaPages";
import ArsipPages from "@pages/ArsipPages";
import DetailFloraPages from "@pages/detail/DetailFloraPages";
import DetailFaunaPages from "@pages/detail/DetailFaunaPages";
import DetailArsipPages from "@pages/detail/DetailArsipPages";

export default function AppRoutes() {
  return (
    <Routes>
      <Route path="/" element={<MainLayout />}>
        <Route index element={<HomePages />} />
        <Route path="about" element={<AboutPages />} />
        <Route path="flora" element={<FloraPages />} />
        <Route path="fauna" element={<FaunaPages />} />
        <Route path="arsip" element={<ArsipPages />} />
        <Route path="flora/{slug}" element={<DetailFloraPages />} />
        <Route path="fauna/{slug}" element={<DetailFaunaPages />} />
        <Route path="arsip/{slug}" element={<DetailArsipPages />} />
      </Route>
    </Routes>
  );
}
