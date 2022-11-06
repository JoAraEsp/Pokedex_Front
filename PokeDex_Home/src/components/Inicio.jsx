import "../Styles/Inicio.css"
import Pikachu from "../Imagenes/Pikachu.png"
import Usuario1 from "../Imagenes/Usuario1.png";
import user2 from "../Imagenes/Usuario2.png";

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
            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">Usuario2</a></div>
                    <div>Integrante de la comunidad</div>
                    <img src={user2} alt="" />
                    <div>Posts: <u>38</u></div>
                    <div>Puntos: <u>2830</u></div>
                </div>
                <div class="content">
                    Se necesitan más moderadores.
                    <br />no tengo problema en formar parte del equipo
                    <br /><br />
                    de moderadores.
                    <br />
                        Buenas y saludos a todos
                        <br />
                    </div>
            </div>

        </div><div class="comment-area hide" id="comment-area">
                <textarea name="comment" id="" placeholder="comment here ... "></textarea>
                <input type="submit" value="submit"></input>
            </div><div class="comment-area hide" id="reply-area">
                <textarea name="reply" id="" placeholder="reply here ... "></textarea>
                <input type="submit" value="submit" />
            </div>
            </>

     );
}

export default Inicio;