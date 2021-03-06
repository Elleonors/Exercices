import React, { Component } from 'react'
import logo                 from '../assets/logo.svg'
import '../css/App.css'

import { establishments }    from './establishments/fixtures'

// Un Component implémente la méthode render() et reçoit en paramètre ses props
class App extends Component {

    // Notre fameuse méthode render()
    // On utilise dans cette méthode la syntaxe JSX
    render() {


      const listEstablishment = establishments.map( (establishment) => {
          return (
              // L'attribut "key" permet à React d'identifier les éléments.
              // Cela améliore les performances lors de l'ajout,
              // la modification et la suppression d'un élément.
              <li
                  key = { establishment.id }
                  className = 'establishment'
              >
                  <h3>{ establishment.name }</h3>
  
                  { establishment.description }
  
              </li>
          )
      })
  
      return (
          <div className="App">
              <div className="App-header">
                  <img src={logo} className="App-logo" alt="logo" />
                  <h2>Welcome to { this.props.title }</h2>
              </div>
              <div className="App-intro">
                  { listEstablishment }
              </div>
  
          </div>
      );
  }
};
export default App;