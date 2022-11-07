import "../Styles/Navbar.css"
import Provisional from "../Imagenes/Lavadora_213345.png"

function Navbar() {
    return ( 
        <>
            <div className="navbar">

                <div className="buscador">
                    <div className="inputs">
                        <input type="text" placeholder="Ingresa el pokemon a buscar"/>
                    </div>
                    <div className="buttons">
                        <button>Inciar Sesion</button>
                        <button>Registrarse</button>
                    </div>
                </div>

                <div className="opciones">
                    <nav>
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Crear Pokemon</a></li>
                            <li><a href="#">Fan Fictions</a></li>
                            <li><a href="#">Eventos</a></li>
                            <li><a href="#">Consejos</a></li>
                            <li><a href="#">Foro</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </>
     );
}

export default Navbar;