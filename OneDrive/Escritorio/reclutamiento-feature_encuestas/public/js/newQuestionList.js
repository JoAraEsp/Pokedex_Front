var contador = 0;

function agregarPregunta() {
  var contenedorPreguntas = document.getElementById("pregunta-lista");

  var nuevaPregunta = document.createElement("div");
  nuevaPregunta.classList.add("preguntas1");
  nuevaPregunta.innerHTML = `<label>Preguntas:</label>
  <input type="text" name="pregunta">`;

  var nuevaLista = document.createElement("div");
  nuevaLista.classList.add("listas1");
  nuevaLista.innerHTML = `<label>Agregar lista:</label>
  <input type="text" name="lista">`;

  contenedorPreguntas.appendChild(nuevaPregunta);
  contenedorPreguntas.appendChild(nuevaLista);
  
  contenedorPreguntas.scrollTop = contenedorPreguntas.scrollHeight;
  contenedorPreguntas.style.minHeight = "calc(100vh - 1%)";
  
  var botonesForm = document.getElementById("botones-form");
  botonesForm.style.top = 100 + contador * 20 + "%";
  
  contador++;
}




