import React from "react";
import Autor from "./InputAutor";
import Tittle from "./InputTitle";
import Comentario from "./comentario";
import Boton from "./boton";

export default function Contenedor2(){
    return(
        <div className="caja_2">
            <Autor/>
            <Tittle/>
            <Comentario/>
            <Boton/>
        </div>
    )
}
