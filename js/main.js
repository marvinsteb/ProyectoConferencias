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
    var listaProductosHtml = document.getElementById("lista_productos");
    var regalo = document.getElementById("regalo");
    var sumaTotal = document.getElementById("suma_total");

    // extras
    var etiquetas = document.getElementById("etiquetas");
    var camisas = document.getElementById("camisa_evento");

    botonCalcular.addEventListener("click", function (event) {
      event.preventDefault();
      if (regalo.value != "") {
        var boletoDia = parseInt(pase_dia.value, 10) || 0,
          boleto2dias = parseInt(pase_dosdias.value, 10) || 0,
          boletocompleto = parseInt(pase_completo.value, 10) || 0,
          cantidadCamisas = parseInt(camisas.value, 10) || 0,
          cantidadEtiquetas = parseInt(etiquetas.value, 10) || 0;

        var totalPagar =
          boletoDia * 30 +
          boleto2dias * 45 +
          boletocompleto * 50 +
          cantidadCamisas * 10 * 0.93 +
          cantidadEtiquetas * 2;

        var listadoProductos = [];

        if (boletoDia > 0) {
          listadoProductos.push(boletoDia + " Pases por día");
        }
        if (boleto2dias > 0) {
          listadoProductos.push(boleto2dias + " Pases por dos días");
        }
        if (boletocompleto > 0) {
          listadoProductos.push(boletocompleto + " Pases completos");
        }
        if (cantidadCamisas > 0) {
          listadoProductos.push(cantidadCamisas + " Camisas");
        }
        if (cantidadEtiquetas > 0) {
          listadoProductos.push(cantidadEtiquetas + " Etiquetas");
        }
        for (let index = 0; index < listadoProductos.length; index++) {
          listaProductosHtml.innerHTML += listadoProductos[index] + "<br/>";
        }
        sumaTotal.innerHTML = `$ ${totalPagar.toFixed(2)}`;
      } else {
        alert("Debes elegir un regalo");
        regalo.focus();
      }
    });
  }); // dom content loaded
})();
