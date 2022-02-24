import React from "react";
//import LocomotiveScroll from "locomotive-scroll";

export default function FullStack() {
  return (
    <section id="fullstackdev">
      <div className="container">
        <div>Web Developer</div>
      </div>
      <h1
        className="home__projects__project__title is-inview"
        datascroll=""
        datascrolldirection="horizontal"
        datascrollspeed="-8"
      >
        <span className="inline-ovh">
          <div className="left title__main">
            <span
              className="slide-up"
              data-content="Toe arts - portfolio for s.owonte"
              aria-hidden="true"
            ></span>
            Open Source Web Developer <br /> WordPress, Drupal, Magento,
            Codeigniter
          </div>
        </span>
      </h1>
    </section>
  );
}
