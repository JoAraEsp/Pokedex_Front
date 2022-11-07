import "../Styles/Header.css"
import Provisional from "../Imagenes/Lavadora_213345.png"

import Logo from "./Logo"
import Navbar from "./Navbar"

function Header() {
    return ( 
        <>
        <div className="header">
            <Logo></Logo>
            <Navbar></Navbar>
        </div>
        </>
     );
}

export default Header;