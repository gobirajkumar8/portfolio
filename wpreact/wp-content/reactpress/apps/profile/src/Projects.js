//import { contains } from "jquery";
import React from "react";
import {
  Murad,
  Balfour,
  DoubleDeer,
  Dymon,
  Mieot,
  Sharper,
} from "./components/Projects";

export default function Projects() {
  return (
    <section id="projects">
      <div className="container">
        <h2 className="projects-title section-title">Projects Worked</h2>
        <div className="row mx-auto">
          <div className="col-sm project-list">
            <Balfour />
          </div>
          <div className="col-sm project-list">
            <Murad />
          </div>
          <div className="col-sm project-list">
            <Dymon />
          </div>
        </div>
        <div className="row">
          <div className="col-sm project-list">
            <DoubleDeer />
          </div>
          <div className="col-sm project-list">
            <Sharper />
          </div>
          <div className="col-sm project-list">
            <Mieot />
          </div>
        </div>
      </div>
    </section>
  );
}
