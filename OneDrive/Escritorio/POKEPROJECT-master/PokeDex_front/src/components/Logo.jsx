import "../Styles/logo.css"
import Provisional from "../Imagenes/Lavadora_213345.png"

function Logo() {
    return ( 
        <>
        <div className="logo">
            <div className="titulo">
                <h1>WiKEMON</h1>
                <p>Todo sobre pokemon...</p>
            </div>
            <div className="logoimg">
                <img src={Provisional}/>
            </div>
        </div>
        </>
     );
}

export default Logo;