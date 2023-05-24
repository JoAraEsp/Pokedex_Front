document.addEventListener('DOMContentLoaded', function(){

  var encuesta = JSON.parse(localStorage.getItem('encuestaGuardada'));
  
  console.log(encuesta);
  
  var tablacuerpo = document.getElementById('cuerpo-tabla');
  
  var ultimoId = 0;
  
  function obtenerFechaActual() {
      var fecha = new Date();
      var dia = fecha.getDate();
      var mes = fecha.getMonth() + 1; 
      var anio = fecha.getFullYear();
      var fechaFormateada = anio + '/' + mes + '/' + dia;
      return fechaFormateada;
  }
  
  for (var i = 0; i < encuesta[0].length; i++) {
    var fila = tablacuerpo.insertRow();
  
    ultimoId++;
  
  if (encuesta && encuesta.length > 0) {
    var celda1 = fila.insertCell(0);
    celda1.innerHTML = ultimoId;
  
    var celda2 = fila.insertCell(1);
    celda2.innerHTML = encuesta[i].titulo;
  
    var celda3 = fila.insertCell(2);
    celda3.innerHTML = obtenerFechaActual();
  
    var celda4 = fila.insertCell(3);
    celda4.innerHTML = encuesta[i].fecha_vigencia;
  
    var celda5 = fila.insertCell(4);
    celda5.innerHTML = encuesta[i].tipo_encuesta;
  
    var celda6 = fila.insertCell(5);
    celda6.innerHTML = encuesta[i].tipo_preguntas;
  
/*     var celda7 = fila.insertCell();
    celda7.innerHTML = `En edición`; */
  
    var celda8 = fila.insertCell(6);
    celda8.innerHTML = `<button class="btn-delete" data-id="{{ $survey->id }}">
    <i class="fas fa-trash">Eliminar</i>
</button>`;
    }
  }
});





/* document.addEventListener('DOMContentLoaded', function(){

var encuesta = JSON.parse(localStorage.getItem('encuestaGuardada'));

console.log(encuesta);

var tablacuerpo = document.getElementById('cuerpo-tabla');

var ultimoId = 0;

function obtenerFechaActual() {
    var fecha = new Date();
    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 1; 
    var anio = fecha.getFullYear();
    var fechaFormateada = anio + '/' + mes + '/' + dia;
    return fechaFormateada;
  }

for (var i = 0; i < encuesta[0].length; i++) {
  var fila = tablacuerpo.insertRow();

  ultimoId++;

if (encuesta && encuesta.length > 0) {
  var celda1 = fila.insertCell(0);
  celda1.innerHTML = ultimoId;

  var celda2 = fila.insertCell(1);
  celda2.innerHTML = encuesta[i].titulo;

  var celda3 = fila.insertCell(2);
  celda3.innerHTML = obtenerFechaActual();

  var celda4 = fila.insertCell(3);
  celda4.innerHTML = encuesta[i].fecha_vigencia;

  var celda5 = fila.insertCell(4);
  celda5.innerHTML = encuesta[i].tipo_encuesta;

  var celda6 = fila.insertCell(5);
  celda6.innerHTML = `En edición`;

  var celda7 = fila.insertCell(6);
  celda7.innerHTML = `<a onclick="mostrarDialogoEliminar()">
  <img class="eliminar" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA/ElEQVR4nO2aQQqDMBBF38pDVXs9ba9Vr1J7jZSCQilMtTNRg/0PZhMi+N+PuAmI41IBV+ABpJkZgG58pjguCwJ8TkuBDOPLnRbsrd+aKY40zlr7N6PoIL3j3K81/VGC3HI0s3eIbCgIagQdrW8sOSKvP3rz43pd4sc+EV1PCrIANYItwyMpjBrBluGRFEaNYMvwSAqjRrBleCSFUSPYMjySwqgRbBkeSWHUCLYMj6QwagRbhkdSGDWCLcMjKYwawZbhkRRGjWDL8EgK81eN1MD5x/WmxCBpxcmGgqBGWOVoTZcB9ph7ziDdjkHanEGqMcywcRNtqRdvBDM8AQ2Ko2a0y0gzAAAAAElFTkSuQmCC">
 </a>
 <dialog id="dialogo-eliminar-encuesta" class="dialog">
   <div class="dialog-contenido">
      <h2>¿Está seguro de que desea eliminar esta encuesta?</h2>
      <p>Al eliminar la encuesta, se borrarán todos los datos y preguntas asociados a ella.</p>
          <div class="botones-dialogo">
              <button type="button" id="boton-cancelar-eliminar" class="btn btn-secondary" onclick="cerrarDialogoEliminar()">Cancelar</button>
              <button type="submit" id="boton-confirmar-eliminar" class="btn btn-danger" onclick="mostrarDialogoEliminado()">Eliminar</button>
              <dialog id="eliminado-correcto" class="dialog">
                  <div class="dialog-contenido">
                  <h2>Eliminado</h2>
PEDAZOCORTADO DE LINK                  </div>
              </dialog>;`;
    }
}
  }); */