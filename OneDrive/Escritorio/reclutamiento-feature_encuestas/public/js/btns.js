function mostrarDialogoGuardar() {
    var dialogoGuardar = document.getElementById('dialogoGuardarEncuesta');
    dialogoGuardar.showModal();
  }

function cerrarDialogoGuardar() {
    var dialogoGuardar = document.getElementById('dialogoGuardarEncuesta');
    dialogoGuardar.close();
  }

function mostrarDialogoCancelar() {
    var dialogoCancelar = document.getElementById('dialogoCancelarEncuesta');
    dialogoCancelar.showModal();
  }

function mostrarDialogoCancelado() {
    var dialogoCancelado = document.getElementById('dialogoCancelado');
    dialogoCancelado.showModal();

    setTimeout(function() {
      dialogoCancelado.close();
  }, 3000);
  }


function cerrarDialogoCancelar() {
    var dialogoCancelar = document.getElementById('dialogoCancelarEncuesta');
    dialogoCancelar.close();
  }


function mostrarDialogoEnviar() {
    var dialogoEnviar = document.getElementById('dialogoEnviarEncuesta');
    dialogoEnviar.showModal();
  }

function cerrarDialogoEnviar() {
    var dialogoEnviar = document.getElementById('dialogoEnviarEncuesta');
    dialogoEnviar.close();
  }