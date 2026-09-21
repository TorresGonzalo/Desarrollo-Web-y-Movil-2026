const formularioContacto =
    document.getElementById("form-contacto");

const mensajeEnviado =
    document.getElementById("mensaje-enviado");


formularioContacto.addEventListener("submit", function(event) {

    event.preventDefault();


    mensajeEnviado.classList.remove("d-none");


    formularioContacto.reset();


});