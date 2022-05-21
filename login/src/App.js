import React from 'react';
import './App.css';
import Login from './components/Login';
import Navigasi from './components/navigasi.js';

function App() {
  return (
    <div className="App">
      <div class="wrapper">
        <Navigasi/>
        <div id="content">
          <h1>Halo</h1>
        </div>
      </div>
    </div>
  );
}

export default App;
