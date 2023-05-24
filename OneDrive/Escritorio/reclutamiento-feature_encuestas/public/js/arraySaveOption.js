
function guardarEncuesta() {
    var tipoPreguntas = document.querySelector('.tipo-preguntas [name="tipo-de-pregunta"]').textContent;
    var tipoEncuesta = document.querySelector('.tipo-encuesta [name="tipo-de-encuesta"]').textContent;
    var fechaVigencia = document.querySelector('input[name="fecha-vigencia"]').value;
    var titulo = document.querySelector('input[name="titulo"]').value;
    var indicaciones = document.querySelector('input[name="indicaciones"]').value;
  
    var preguntas = [];
    var listaPreguntas = document.querySelectorAll('#preguntas input[name="pregunta"]');
    for (var i = 0; i < listaPreguntas.length; i++) {
      preguntas.push(listaPreguntas[i].value);
    }

    var opciones = [];
    var listaOpciones = document.querySelectorAll('#opciones input[name="opcion"]');
    for (var i = 0; i < listaOpciones.length; i++) {
      opciones.push(listaOpciones[i].value);
    }
  
    var encuesta = {
      tipo_preguntas: tipoPreguntas,
      tipo_encuesta: tipoEncuesta,
      fecha_vigencia: fechaVigencia,
      titulo: titulo,
      indicaciones: indicaciones,
      preguntas: preguntas,
      opciones: opciones

    };

    var encuestaJson = JSON.stringify(encuesta);
    localStorage.setItem('encuestaGuardada', JSON.stringify(encuestaJson));
  
    console.log(encuestaJson);
  }