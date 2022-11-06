import "../Styles/Bodyhome.css"
import Inicio from "./Inicio";
import Novedad1 from "../Imagenes/Novedad1.png"
import Novedad2 from "../Imagenes/Novedad2.jpg"
import Novedad3 from "../Imagenes/Novedad3.jpg"

function Body() {
    return ( 
        <>
            <div className="container">
                <div className="aside">
                    <div className="subtitulo"><h2>Novedades</h2></div>
                        <div className="novedad">
                            <img className="novedadimg" src={Novedad1}></img>
                            <p>Los episodios de DP Battle Dimension se añaden a TV Pokemon</p>
                        </div>
                        <div className="novedad">
                            <img className="novedadimg" src={Novedad2}></img>
                            <p>Consigue a Eternatus variocolor en Pokemon Espada o Escudo</p>
                        </div>
                        <div className="novedad">
                            <img className="novedadimg" src={Novedad3}></img>
                            <p>Consigue a Eternatus variocolor en Pokemon Espada o Escudo</p>
                        </div>
                </div>

                <div className="contenido">
                <Inicio/>
                </div>
            </div>
        </>
     );
}

export default Body;