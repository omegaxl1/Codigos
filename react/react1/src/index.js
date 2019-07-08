import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './components/App';
import * as serviceWorker from './serviceWorker';

const root = document.getElementById("root")
/*
const elemento = React.createElement ("h1",{className:"saludos"},"hola")
*/


ReactDOM.render(<App/>, root );