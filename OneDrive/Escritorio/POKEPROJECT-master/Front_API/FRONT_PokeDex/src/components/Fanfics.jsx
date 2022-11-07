import "../Styles/Fanfics.css"
import Portada1 from "../Imagenes/Portada1.png";
import Portada2 from "../Imagenes/Portada2.png";

function Fanfics() {
    return ( 
        <>
            <body>
                <div class="fila">
                    <div class="columna">
                        <img src={Portada1} />
                    </div>
                </div>
                <div class="fila">
                    <div class="columna">
                        <img src={Portada2} />
                    </div>
                </div>
            </body>
        </>

     );
}

export default Fanfics;