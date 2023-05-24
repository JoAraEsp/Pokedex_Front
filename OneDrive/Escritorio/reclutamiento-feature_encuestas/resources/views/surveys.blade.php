<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Encuestas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="{{ asset('js/crear.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Vista Blade -->

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Obtén todos los formularios de eliminación
    var formulariosEliminar = document.querySelectorAll('.form-eliminar');

    // Asigna un controlador de eventos a cada formulario de eliminación
    formulariosEliminar.forEach(function(formulario) {
        formulario.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío normal del formulario

            var confirmacion = confirm('¿Estás seguro de eliminar esta fila?');
            if (confirmacion) {
                var fila = formulario.closest('tr');

                // Envía una solicitud AJAX al servidor para eliminar la fila
                axios.post(formulario.action, new FormData(formulario))
                    .then(function(response) {
                        // Elimina la fila de la tabla si la operación fue exitosa en el servidor
                        fila.parentNode.removeChild(fila);
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            }
        });
    });
});
</script>
@endsection

    <link rel="stylesheet" href="{{ asset('css/surveys.css') }}">
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

    <!-- Botón de crear encuesta -->
    <div class="container my-3">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="http://127.0.0.1:8000/createsurvey" onclick="mostrarDialogoCrear(); return false;" class="crear-encuesta">Crear encuesta</a>
                <dialog id="dialogoCrearEncuesta">
                    <h2 class="modal-title">Nueva encuesta</h2>
                    <p>
                    <div>
                        <label>Preguntas:</label>
                        <select class="tipo-preguntas" id="preguntas">
                            <option value="unselected">Seleccione una opción...</option>
                            <option value="abierta">Abierta</option>
                            <option value="multiple">Opción múltiple</option>
                            <option value="lista">Lista</option>
                        </select>
                        <label>Encuestas:</label>
                        <select class="tipo-encuesta" id="encuesta">
                            <option value="unselected">Seleccione una opción...</option>
                            <option value="publico">Público</option>
                            <option value="anonimo">Anónimo</option>
                        </select>
                    </div>
                    </p>
                    <button class="btn btn-secondary" onclick="cerrarDialogoCrear()">Cerrar</button>
                    <button class="btn btn-primary" onclick="redireccionar()">Aceptar</a>
                </dialog>
            </div>
        </div>
    </div> 

    <!-- Tabla de encuestas -->
    <br>
    <br>
    <br>
    <form action="" method="GET">
    <h1></h1>
    </form>
    <div class="container mt-n3">
    <div class="table-responsive">
        <div class="col-md-12">
            <table class="table table-striped" id="tabla-encuestas">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de vigencia</th>
                        <th>Tipo</th>
                        <th>Estatus</th>
                        <th>¿Eliminar?</th>
                    </tr>
                </thead>
                <tbody id="cuerpo-tabla">
                    @foreach ($surveys as $survey)
                    <tr>
                        <th>{{ $survey -> id }}</th>
                        <th>{{ $survey -> titulo }}</th>
                        <th>{{ $survey -> created_at }}</th>
                        <th>{{ $survey -> fecha }}</th>
                        <th>{{ $survey -> tipo }}</th>
                        <th>-</th>
                        <th>
                            <button class="btn-delete" data-id="{{ $survey->id }}">
                                 <i class="fas fa-trash">Eliminar</i>
                            </button>
                        </th>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

