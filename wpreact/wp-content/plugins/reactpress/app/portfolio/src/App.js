import './App.css';
import './Loading';
import Loading from './Loading';
import Experence from './experience';
import Approch from './approach'
import Footer from './Footer';

function App() {
  return (
    <div className="App">
    <Loading status="activeLoader"/>
      <header className="App-header">
        {/* <img src={logo} className="App-logo" alt="logo" /> */}
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
      <Experence />
      <Approch />
      <Footer />
    </div>
  );
}

export default App;
