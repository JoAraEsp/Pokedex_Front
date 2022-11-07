import "../Styles/Forum.css"
import Usuario1 from "../Imagenes/Usuario1.png";
import Usuario2 from "../Imagenes/Usuario2.png";

function Forum() {
    return ( 
        <><div class="topic-container">
            <div class="head">
                <div class="authors">Autor</div>
                <div class="content">Pokemon (Read 1325 Times)</div>
            </div>

            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">Usuario</a></div>
                    <div>Integrante de la comunidad</div>
                    <img src={Usuario1} alt="" />
                    <div>Posts: <u>45</u></div>
                    <div>Puntos: <u>4586</u></div>
                </div>
                <div class="content">
                    Me gustaría aportar info sobre un pokemon en especial.
                    <br />además me gustaría ser parte de los moderadores
                    <br /><br />
                    claro si es posible.
                    <br />
                        Saludos
                        <br />
                        <div class="comment">
                            <button onclick="showComment()">Comentar</button>
                        </div>
                    </div>
            </div>
            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">Usuario2</a></div>
                    <div>Integrante de la comunidad</div>
                    <img src={Usuario2} alt="" />
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
                        <div class="comment">
                            <button onclick="showComment()">Comentar</button>
                        </div>
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

export default Forum;