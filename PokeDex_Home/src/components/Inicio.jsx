import "../Styles/Inicio.css"
import Pikachu from "../Imagenes/Pikachu.png"
import Slider from "./Slider"

function Inicio() {
    return ( 
        <><div class="topic-container">
            <h1>BIENVENIDO</h1>
            <div class="body">
                <div class="entrada">
                    <p>Un saludo, en esta wiki encontrarás todo lo relacionado a Pokemon: información y entretenimiento. Esperamos tenga una
                        buena estancia aquí. ¡Explore!
                    </p>
                </div>
                <div class="content">
                    <img className="Entraimg" src={Pikachu}></img>
                </div>
            </div>
                <div class="cuerpo">
                    <Slider></Slider>
                </div>
          </div>
            </>

     );
}

export default Inicio;