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

    botonCalcular.addEventListener("click", function (event) {
      event.preventDefault();
      if (regalo.value != "") {
        var boletoDia = pase_dia.value,
          boleto2dias = pase_dosdias.value,
          boletocompleto = pase_completo.value;
        var total = boletoDia * 30 + boleto2dias * 45 + boleto2dias * 50;
        console.log(total);
      } else {
        alert("Debes elegir un regalo");
        regalo.focus();
      }
    });
  }); // dom content loaded
})();
