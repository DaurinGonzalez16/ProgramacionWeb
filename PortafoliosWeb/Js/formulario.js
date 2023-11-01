function confirmacion() {
  var respuesta = window.confirm("¿Estás seguro de que quieres enviar esto?");

  if (respuesta == true) {
    window.open(
      "mensaje_confirmacion.html",
      "Confirmación",
      "width=500,height=300"
    );
    return true;
  } else {
    return false;
  }
}

var boton = document.getElementById("enviarformulario");
boton.addEventListener("click", confirmacion);
