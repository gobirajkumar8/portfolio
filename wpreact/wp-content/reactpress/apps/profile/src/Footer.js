import React from "react";
import "./index.css";
import "./App.css";
import {
  IconGithub,
  IconLinkedIn,
  IconInstagram,
  IconCodepen,
  IconFacebook,
} from "./components/socal";

//import { socialMedia } from '@config';

export default function Footer() {
  return (
    <footer>
      <section>
        <div>
          <div className="developed footer-sec">Developed By GR Rajkumar.</div>
          <div className="mailid footer-sec">
            <a href="mailto:gobirajkumar@gmail.com">
              gobirajkumar1989@gmail.com
            </a>
          </div>
          <div className="footer-sec">
            <ul className="socal-media">
              <li>
                <a
                  href="https://github.com/gobirajkumar8"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <IconGithub />
                </a>
              </li>
              <li>
                <a
                  href="https://www.facebook.com/rajkumar.gr"
                  rel="noopener noreferrer"
                >
                  <IconFacebook name="facebook" />
                </a>
              </li>
              <li>
                <a
                  href="https://github.com/gobirajkumar8"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <IconCodepen />
                </a>
              </li>
              <li>
                <a
                  href="https://www.linkedin.com/in/rajkumar-gr8/"
                  rel="noopener noreferrer"
                  target="_blank"
                >
                  <IconLinkedIn />
                </a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/rajkumargr8/"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <IconInstagram />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </footer>
  );
}
