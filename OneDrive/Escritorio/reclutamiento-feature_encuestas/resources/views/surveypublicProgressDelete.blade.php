<!DOCTYPE html>
<html lang="es">
<head>
  <title>Encuesta</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/survey.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/surveys.css') }}"/>
  <script src="{{ asset('js/eliminarD.js') }}"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <!-- Encabezado -->
   @include('PrinNav')
    <br>
    <br>
    <!-- Botón de regreso -->
    <div class="container-fluid d-flex align-items-center ms-3 mb-3">
      <a href="http://127.0.0.1:8000/">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACHUlEQVR4nO2aP0hWURjGf6lIn7QIDWJLmIqgEOiQW4qEg0sZbaHm5FhrS6J0l2wMkW92dDCiKUQacjHUhsAhCpLScEmlQMsrF47wIXnu0e4953Du+4Nnfs/z3HPe7/z5QBAEQRAEQcicK0AzUEXBaAbeAbHSF6CXgtAGfKswf6w94BoFNR8rjRMw7cCWxnyiMgU2HwNjBEiHofkPQC0BrvnvBuY/A1cJjLYim+8wnPb7wCPg3jl1F+hT+4oaPPryWwbms9YO8AoYAkquzNcA7x2YP6mvwChQbTuATg/MV2rF9u7ylgemT2rb5jnjMvDLA9P/arY9tkJ46IHh02ZCk60QIsNBHQDL/6FVYPOMPaHatxCiDGq1ABPArkG9B1gkshhCQiOwZPATWfIxhPGM6pUMQriPZSKDAP4C3RnOBN1yeIkDIoMQnmVYb1JT56eLXaJJCC/IjtaUWs7uHyPNoO5kXEt3KEtOkc54otZ85YBmc6izogngNo7pBqaAaWAwpxrrmgAGCJyLwG9NADcInIGUJlhP4LzRmP9I4AynfP3nBEx/yto/BK4TIJfUifBPytefs3k71JWzbqqDzQzww/BmKNkh5koD8NpgMC6U++tzFbDogdHTpv4FG6/AsYd6q3qElQ4ce6ayzVfnBoMubEsbaj9gnaeOjSd/wXkM1OGQEWAB+GRBa8C82gP0uLrpEQRBEARBEARBEATC4gj7lwx40GjAtwAAAABJRU5ErkJggg==">
      </a>
      <h1 class="text-dark font-poppins" >Encuestas</h1>
   </div>


   <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form>
        <div class="form-group">
          <label for="tipo-encuesta">Tipo de encuesta:</label>
          <?php
            // aquí cargarías los valores de tipo de encuesta desde la base de datos
            $tipo_encuesta = "Público";
          ?>
          <label class="form-control"><?php echo $tipo_encuesta; ?></label>
        </div>
        <div class="form-group">
          <label for="fecha-vigencia">Fecha de vigencia:</label>
          <?php
            // aquí cargarías los valores de fecha de vigencia desde la base de datos
            $fecha_vigencia = "DD/MM/AA";
          ?>
          <input type="date" class="form-control" id="fecha-vigencia" name="fecha-vigencia" value="<?php echo $fecha_vigencia; ?>">
        </div>
        <div class="form-group">
          <label for="titulo">Título:</label>
          <input type="text" class="form-control" id="titulo" name="titulo" value="Titulo de la encuesta">
        </div>
        <div class="form-group">
          <label for="indicaciones">Indicaciones:</label>
          <textarea class="form-control" id="indicaciones" name="indicaciones" rows="3">Por favor, responda las siguientes preguntas</textarea>
        </div>
        <div class="form-group">
          <label for="nombre">Nombre del encuestado:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Apellido Apellido">
        </div>
        <div class="form-group">
          <label for="preguntas-encuesta">Preguntas de la encuesta:</label>
          <!-- Aquí debes agregar tus preguntas de la encuesta -->
        </div>
        <div class="form-group">
        <button type="button" id="eliminar-encuesta" class="btn btn-danger" onclick="mostrarDialogoEliminar()">Eliminar</button>
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
                            <img src="data:image/png;base64,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"  class="mx-auto d-block">
                            </div>
                        </dialog>
                    </div>
                </div>
            </dialog>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>