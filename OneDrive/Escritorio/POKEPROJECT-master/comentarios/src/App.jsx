import React from 'react'
import Navbar from './components/navbar'
import Contenedor from './components/contenedor'
import "./index.css"
import Autor from './components/InputAutor'

function App() {
  return (
    <div className="App">
      <Navbar/>
      <Contenedor></Contenedor>
    </div>
  )
}

export default App
