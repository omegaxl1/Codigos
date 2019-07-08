import React from 'react';
import Users from './Pages/Users';
import { BrowserRouter as Router, Route, Switch } from "react-router-dom"




const App = () => (
  <Router>
    
    <Switch>

      <Route path="/" component={ Users } />  

      <Route component={() => (
        <div className="ed-grid">
          <h1>Error 404</h1>
          <span>Página no encontrada</span>  
        </div>
      )} />  
    </Switch> 
  </Router>
)

export default App;
