var estadoVisible = 0; // 0: primerTexto, 1: segundoTexto, 2: tercerTexto

document.addEventListener("click", function() {
    if (estadoVisible === 0) {
        mostrarSegundoTexto();
    } else if (estadoVisible === 1) {
        desaparecerAmbosTextos();
    } else {
        mostrarTercerTexto();
    }
});

function mostrarSegundoTexto() {
    var primerTexto = document.getElementById("primerTexto");
    var segundoTexto = document.getElementById("segundoTexto");

    primerTexto.style.opacity = 0;

    setTimeout(function() {
        primerTexto.style.visibility = "hidden";
        segundoTexto.style.visibility = "visible";
        segundoTexto.style.opacity = 1;

        estadoVisible = 1; // Cambiar el estado
    }, 500);
}

function desaparecerAmbosTextos() {
    var segundoTexto = document.getElementById("segundoTexto");
    var tercerTexto = document.getElementById("tercerTexto");

    segundoTexto.style.opacity = 0;

    setTimeout(function() {
        segundoTexto.style.visibility = "hidden";
        tercerTexto.style.visibility = "visible";
        tercerTexto.style.opacity = 1;

        estadoVisible = 2; // Cambiar el estado
    }, 500);
}

function mostrarTercerTexto() {
    // Puedes agregar lógica adicional aquí si es necesario
}
