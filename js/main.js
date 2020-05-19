(function () {
  "use strict";
  document.addEventListener("DOMContentLoaded", function () {
    console.log("Esperando a que la pagina cargue completamente ");
    // campos datos usuario
    var nombre = document.getElementById("nombre");
    var apellido = document.getElementById("apellido");
    var email = document.getElementById("email");

    // campos para los pases
    var pase_dia = document.getElementById("pase_dia");
    var pase_completo = document.getElementById("pase_completo");
    var pase_dosdias = document.getElementById("pase_dosdias");

    //botones y divs
    var botonCalcular = document.getElementById("calcular");
    var errorDiv = document.getElementById("error");
    var botonRegistro = document.getElementById("btnRegistro");
    var resultado = document.getElementById("lista_productos");
    var regalo = document.getElementById("regalo");

    // extras
    var etiquetas = document.getElementById("etiquetas");
    var camisas = document.getElementById("camisa_evento");

    botonCalcular.addEventListener("click", function (event) {
      event.preventDefault();
      if (regalo.value != "") {
        var boletoDia = parseInt(pase_dia.value, 10) || 0,
          boleto2dias = paseInt(pase_dosdias.value, 10) || 0,
          boletocompleto = parseInt(pase_completo.value, 10) || 0,
          cantidadCamisas = parseInt(camisas.value, 10) || 0,
          cantidadEtiquetas = parseInt(etiquetas.value, 10) || 0;

        var totalPagar =
          boletoDia * 30 +
          boleto2dias * 45 +
          boletocompleto * 50 +
          cantidadCamisas * 10 * 0.93 +
          cantidadEtiquetas * 2;
        console.log(totalPagar);
      } else {
        alert("Debes elegir un regalo");
        regalo.focus();
      }
    });
  }); // dom content loaded
})();
