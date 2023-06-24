/* Código para habilitar y deshabilitar la ventana de registro */
const checkbox = document.getElementById("btn__regis");
const contenedor = document.getElementById("contenedor");

/**const checkbox2 = document.getElementById("backBtn");
const contendor2 = document.getElementById("loginContenedor"); */

checkbox.addEventListener("change", function () {
  if (this.checked) {
    mostrarContenedor();
  } else {
    ocultarContenedor();
  }
});

function mostrarContenedor() {
    console.log('Mostrando contenedor de registro');
  contenedor.style.display = "block";
  setTimeout(function () {
    contenedor.style.opacity = "1";
  }, 50);
}

function ocultarContenedor() {
    console.log('Ocultando contenedor');
  contenedor.style.opacity = "0";
  setTimeout(function () {
    contenedor.style.display = "none";
  }, 300);
}