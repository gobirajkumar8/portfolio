import React from "react";
import { Navbar, Nav } from "react-bootstrap";
import logo from "./logo.png";
//import Offcanvas from "react-bootstrap/Offcanvas";
//import NavDropdown from "react-bootstrap/NavDropdown";
//import Button from "react-bootstrap/Button";
//import Form from "react-bootstrap/Form";
//import Container from "react-bootstrap/Container";

export default function NavigationMenu() {
  return (
    <section className="nav-container">
      <div className="col-sm-4">
        <div className="logo-container">
          <img
            src={logo}
            alt="logo"
            className="App-logo align-top d-inline-block"
          />
        </div>
      </div>
      <div className="col-sm-8">
        <div className="header-menu">
          <Navbar variant="dark">
            <Nav>
              <Navbar.Brand href="#projects">Test Company</Navbar.Brand>
              <Navbar.Brand href="#about-me">About Me</Navbar.Brand>
              <Navbar.Brand href="#experence">Works</Navbar.Brand>
              <Navbar.Brand href="#projects">Projects</Navbar.Brand>
              <Navbar.Brand href="#approch">Contact</Navbar.Brand>
            </Nav>
          </Navbar>
        </div>
        <div className="header-menu">
          <a
            className="resume-button"
            href={process.env.PUBLIC_URL + "resume_rajkumar.pdf"}
            target="_blank"
            rel="noopener noreferrer"
          >
            Resume
          </a>
        </div>
      </div>
    </section>
  );
}
