import React from "react";
import "./App.css";
import Loading from "./Loading";
import NavigationMenu from "./Navigation";
import FullStack from "./Fullstack";
import About from "./About";
//import Works from "./Works";
import Projects from "./Projects";
import Experence from "./experience";
import Approch from "./approach";
import Footer from "./Footer";

function App() {
  return (
    <div className="App">
      <Loading status="activeLoader" />
      <NavigationMenu />
      <FullStack />
      <About />
      <Experence />
      <Projects />
      <Approch />
      <Footer />
    </div>
  );
}

export default App;
