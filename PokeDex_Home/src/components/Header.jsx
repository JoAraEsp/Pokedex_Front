import "../Styles/Header.css"

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