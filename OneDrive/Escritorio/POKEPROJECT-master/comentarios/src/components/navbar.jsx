import React, { Component } from 'react';
import './styles/navbar.css';

function Navbar() {
    return (
        <div className="navbar">
            <img src='./src/assets/pokbola.png'></img>
            <a href="/" className='logo'>POKECOMMENTS</a>
            <img src='./src/assets/pokbola.png'></img>
        </div>
    );
}

export default Navbar;