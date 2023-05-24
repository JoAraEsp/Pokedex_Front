function mostrarDialogoCrear() {
    var dialogoCrear = document.getElementById('dialogoCrearEncuesta');
    dialogoCrear.showModal();
}

function redireccionar() {
    var opciones = document.getElementById("preguntas").value;
    var encuesta = document.getElementById("encuesta").value;

    if (opciones === "multiple" && encuesta === "publico") {
        window.location.href = "/createsurvey_publicoption";
    } else if (opciones === "multiple" && encuesta === "anonimo") {
        window.location.href = "/createsurvey_anonymousoption";
    } else if (opciones === "abierta" && encuesta === "publico") {
        window.location.href = "/createsurvey_publicopen";
    } else if (opciones === "abierta" && encuesta === "anonimo") {
        window.location.href = "/createsurvey_anonymousopen";
    } else if (opciones === "lista" && encuesta === "publico") {
        window.location.href = "/createsurvey_publiclist";
    } else if (opciones === "lista" && encuesta === "anonimo") {
        window.location.href = "/createsurvey_anonymouslist";
    } else {
       
    }
}


function cerrarDialogoCrear() {
    var dialogoCrear = document.getElementById('dialogoCrearEncuesta');
    dialogoCrear.close();
}


  