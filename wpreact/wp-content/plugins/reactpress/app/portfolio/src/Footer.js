import React from 'react';
import './index.css';
import './App.css';
import { IconGithub, IconLinkedIn, IconInstagram, IconCodepen, IconFacebook} from './components/socal';

//import { socialMedia } from '@config';


export default function Footer() {
  return(
    <footer>
      <section>
        <div>
          <div className="developed footer-sec">Developed By GR Rajkumar.</div>
          <div className='mailid footer-sec'><a href='mailto:gobirajkumar@gmail.com'>gobirajkumar1989@gmail.com</a></div>
          <div className='footer-sec'>
            <ul className='socal-media'>
              <li><a href='https://github.com/gobirajkumar8' target="_blank"><IconGithub /></a></li>
              <li><a href='#'><IconFacebook name="facebook" /></a></li>
              <li><a href='https://github.com/gobirajkumar8' target="_blank"><IconCodepen /></a></li>
              <li><a href='https://www.linkedin.com/in/rajkumar-gr8/'><IconLinkedIn /></a></li>
              <li><a href='#'><IconInstagram /></a></li>
            </ul>
          </div>
        </div>
      </section>
    </footer>
  );
}
