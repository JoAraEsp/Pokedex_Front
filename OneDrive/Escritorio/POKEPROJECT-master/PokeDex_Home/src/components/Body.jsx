import "../Styles/Body.css"
import Forum from "./Forum";


function Body() {
    return ( 
        <>
            <div className="container">

                <div className="aside">
                    <div className="subtitulo"><h2>Bienvenidos al foro</h2></div>
                    <p>
                    El foro tiene como objetivo en dar al sitio un ambiente participativo,
                    donde todos los integrantes de la comunidad puedan comentar acerca de
                    Pokemon, resolver dudas o dar sugerencias. Todo es válido con respeto.
                    </p>
                </div>

                <div className="contenido">
                    <h1>Foro</h1>
                    <p>¿Qué opinas? Participa. Sigue las reglas de la comunidad</p>
                    <>
                    <Forum></Forum>
                    </>
                </div>
            </div>
        </>
     );
}

export default Body;