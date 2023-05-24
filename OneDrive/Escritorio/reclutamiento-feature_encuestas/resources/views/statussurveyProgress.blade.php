<!DOCTYPE html>
<html>
<head>
	  <title>Resultados de encuesta</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/surveys.css') }}"/>
</head>
<body>
   <!-- Encabezado -->
   @include('PrinNav')
    <br>
    <br>
    <!-- Botón de regreso -->
    <div class="container-fluid d-flex align-items-center mb-3">
      <a href="http://127.0.0.1:8000/">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACHUlEQVR4nO2aP0hWURjGf6lIn7QIDWJLmIqgEOiQW4qEg0sZbaHm5FhrS6J0l2wMkW92dDCiKUQacjHUhsAhCpLScEmlQMsrF47wIXnu0e4953Du+4Nnfs/z3HPe7/z5QBAEQRAEQcicK0AzUEXBaAbeAbHSF6CXgtAGfKswf6w94BoFNR8rjRMw7cCWxnyiMgU2HwNjBEiHofkPQC0BrvnvBuY/A1cJjLYim+8wnPb7wCPg3jl1F+hT+4oaPPryWwbms9YO8AoYAkquzNcA7x2YP6mvwChQbTuATg/MV2rF9u7ylgemT2rb5jnjMvDLA9P/arY9tkJ46IHh02ZCk60QIsNBHQDL/6FVYPOMPaHatxCiDGq1ABPArkG9B1gkshhCQiOwZPATWfIxhPGM6pUMQriPZSKDAP4C3RnOBN1yeIkDIoMQnmVYb1JT56eLXaJJCC/IjtaUWs7uHyPNoO5kXEt3KEtOkc54otZ85YBmc6izogngNo7pBqaAaWAwpxrrmgAGCJyLwG9NADcInIGUJlhP4LzRmP9I4AynfP3nBEx/yto/BK4TIJfUifBPytefs3k71JWzbqqDzQzww/BmKNkh5koD8NpgMC6U++tzFbDogdHTpv4FG6/AsYd6q3qElQ4ce6ayzVfnBoMubEsbaj9gnaeOjSd/wXkM1OGQEWAB+GRBa8C82gP0uLrpEQRBEARBEARBEATC4gj7lwx40GjAtwAAAABJRU5ErkJggg==">
      </a>
      <h1 class="text-dark font-poppins" >Encuestas</h1>
   </div>
  
<div class="card w-75 mx-auto">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
        <details open>
          <summary class="text-primary">Personas que respondieron</summary>
          <ul class="list-group">
            <li class="list-group-item">Nombre 1</li>
            <li class="list-group-item">Nombre 2</li>
            <li class="list-group-item">Nombre 3</li>
            <li class="list-group-item">Nombre 4</li>
            <li class="list-group-item">Nombre 5</li>
          </ul>
        </details>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
        <details open>
          <summary>Personas que aún no responden</summary>
          <ul class="list-group">
            <li class="list-group-item">Nombre 1</li>
            <li class="list-group-item">Nombre 2</li>
            <li class="list-group-item">Nombre 3</li>
            <li class="list-group-item">Nombre 4</li>
            <li class="list-group-item">Nombre 5</li>
          </ul>
        </details>
      </div>
    </div>
  </div>
</div>


</body>
</html>