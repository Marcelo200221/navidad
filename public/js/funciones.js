var estadoVisible = false; // Variable para rastrear el estado actual

    document.addEventListener("click", function() {
        if (!estadoVisible) {
            mostrarSegundoTexto();
        } else {
            desaparecerAmbosTextos();
        }
    });


function mostrarSegundoTexto() {
    var segundoTexto = document.getElementById("segundoTexto");
    segundoTexto.style.visibility = "visible";
    segundoTexto.style.opacity = 1;

    setTimeout(function() {
        segundoTexto.classList.remove("oculto");
    }, 500);

    estadoVisible = true; // Cambiar el estado
}

function desaparecerAmbosTextos() {
    var primerTexto = document.getElementById("primerTexto");
    var segundoTexto = document.getElementById("segundoTexto");

    primerTexto.style.opacity = 0;
    segundoTexto.style.opacity = 0;

    setTimeout(function() {
        primerTexto.style.visibility = "hidden";
        segundoTexto.style.visibility = "hidden";
    }, 500);

    estadoVisible = false; // Cambiar el estado
}