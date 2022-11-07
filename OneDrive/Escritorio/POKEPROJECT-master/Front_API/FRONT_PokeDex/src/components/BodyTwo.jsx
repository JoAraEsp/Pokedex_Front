import "../Styles/Body.css"
import Forum from "./Forum";


function Body() {
    return ( 
        <>
            <div className="container">

                <div className="aside">
                    <div className="subtitulo"><h2>Área de fanfics</h2></div>
                    <p>
                    El propósito de este apartado es dar libertad a los de la comunidad para compartir historias alternativas del mundo de Pokemon
                    y que otros puedan ver y disfrutar de dicho contenido
                    </p>
                </div>

                <div className="contenido">
                    <h1>Ficciones de fans para fans</h1>
                    <p>Échale un vistazo</p>
                    <>
                    <Forum></Forum>
                    </>
                </div>
            </div>
        </>
     );
}

export default Body;