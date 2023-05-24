<!DOCTYPE html>
<html lang="es">
<head>
  <title>Encuesta</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/survey.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/surveys.css') }}"/>
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
            $tipo_encuesta = "Anónimo";
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
          <button class="btn btn-primary" id="submit" type="submit">Enviar respuestas</button>
          <button class="btn btn-secondary" id="button" type="button">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>