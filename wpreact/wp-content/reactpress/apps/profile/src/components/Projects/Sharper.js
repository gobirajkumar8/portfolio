import React from "react";

const Sharper = () => (
  <section className="project-inner">
    <div className="project-top">
      <div className="folder">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          role="img"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          strokeWidth="1"
          strokeLinecap="round"
          strokeLinejoin="round"
          className="social-link feather-folder"
        >
          <title>Folder</title>
          <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
        </svg>
      </div>
      <div className="project-links">
        <a
          href="https://medium.com/stories-from-upstatement/integrating-algolia-search-with-wordpress-multisite-e2dea3ed449c"
          aria-label="External Link"
          className="external"
          target="_blank"
          rel="noopener noreferrer"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            role="img"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
            className="feather feather-external-link"
          >
            <title>External Link</title>
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
            <polyline points="15 3 21 3 21 9"></polyline>
            <line x1="10" y1="14" x2="21" y2="3"></line>
          </svg>
        </a>
      </div>
    </div>
    <h3 className="project-title">
      <a
        href="https://www.balfour.com/"
        target="_blank"
        rel="noopener noreferrer"
      >
        Balour
      </a>
    </h3>
    <div className="project-description">
      Building a custom multisite compatible WordPress plugin to build global
      search with Algoliae
    </div>
    <footer>
      <ul className="project-tech-list">
        <li>Magento 2</li>
        <li>PHP</li>
        <li>S3</li>
      </ul>
    </footer>
  </section>
);

export default Sharper;
