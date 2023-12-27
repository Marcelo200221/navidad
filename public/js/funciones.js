var estadoVisible = 0; // 0: primerTexto, 1: segundoTexto, 2: tercerTexto

document.addEventListener("click", function() {
    if (estadoVisible === 0) {
        mostrarSegundoTexto();
    } else if (estadoVisible === 1) {
        desaparecerAmbosTextos();
    } else {
        mostrarImagenes();
        mostrarBoton();
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

function mostrarImagenes() {
    var imagenes = document.getElementById('imagenes');
    var tercerTexto = document.getElementById('tercerTexto');

    tercerTexto.style.opacity = 0;
    setTimeout(function(){
        tercerTexto.style.visibility = "hidden";
        imagenes.classList.remove("oculto");

        estadoVisible = 2;
    }, 500);

}

function mostrarBoton(){
    var boton = document.getElementById('boton');
    if (boton) {
        boton.style.display = "block"; // O "inline" o el valor que corresponda a tu diseño
    }
}
