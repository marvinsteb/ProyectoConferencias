(function () {
  "use strict";
  document.addEventListener("DOMContentLoaded", function () {
    console.log("Esperando a que la pagina cargue completamente ");
    // fixed top menu
    var alturaVentana = $(window).height();
    var alturaBarra = $(".barra").innerHeight();
    $(window).scroll(function () {
      var scroll = $(this).scrollTop();
      if (scroll > alturaVentana) {
        $(".barra").addClass("fixedTop");
        $("body").css({ "margin-top": alturaBarra + "px" });
      } else {
        $(".barra").removeClass("fixedTop");
        $("body").css({ "margin-top": "0px" });
      }
    });
    // menu para dispositivo movil
    $(".menu-movil").on("click", function () {
      $(".navegacion-principal").slideToggle();
    });
    // mapa

    if ($(".mapa").length > 0) {
      var map = L.map("mapa").setView([14.624116, -90.534897], 13);

      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      }).addTo(map);

      L.marker([14.624116, -90.534897])
        .addTo(map)
        .bindPopup("Proyecto Conferencias <br> Boletos disponibles")
        .openPopup();
    }

    // campos datos usuario
    var nombre = document.getElementById("nombre");
    var apellido = document.getElementById("apellido");
    var email = document.getElementById("email");
    if (nombre != null || apellido != null || email != null) {
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

      function validarCampos() {
        if (this.value === "") {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "Este campo es obligatorio";
          errorDiv.style.border = "1px solid red";
          this.style.border = "1px solid red";
        } else {
          errorDiv.style.display = "none";
          this.style.border = "1px solid #cccccc";
        }
      }
      nombre.addEventListener("blur", validarCampos);
      apellido.addEventListener("blur", validarCampos);
      email.addEventListener("blur", validarCampos);
      email.addEventListener("blur", function () {
        if (this.value.indexOf("@") > -1) {
          errorDiv.style.display = "none";
          this.style.border = "1px solid #cccccc";
        } else {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "El email es incorrecto";
          errorDiv.style.border = "1px solid red";
          this.style.border = "1px solid red";
        }
      });

      function mostrarDias() {
        var boletoDia = parseInt(pase_dia.value, 10) || 0,
          boleto2dias = parseInt(pase_dosdias.value, 10) || 0,
          boletocompleto = parseInt(pase_completo.value, 10) || 0;

        var diasElegidos = [];
        if (boletoDia >= 1) {
          diasElegidos.push("viernes");
        }
        if (boleto2dias >= 1) {
          diasElegidos.push("viernes", "sabado");
        }
        if (boletocompleto >= 1) {
          diasElegidos.push("viernes", "sabado", "domingo");
        }
        for (let index = 0; index < diasElegidos.length; index++) {
          document.getElementById(diasElegidos[index]).style.display = "block";
        }
      }
      pase_dia.addEventListener("blur", mostrarDias);
      pase_dosdias.addEventListener("blur", mostrarDias);
      pase_completo.addEventListener("blur", mostrarDias);

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
          listaProductosHtml.style.display = "block";
          listaProductosHtml.innerHTML = "";
          for (let index = 0; index < listadoProductos.length; index++) {
            listaProductosHtml.innerHTML += listadoProductos[index] + "<br/>";
          }
          sumaTotal.innerHTML = `$ ${totalPagar.toFixed(2)}`;
        } else {
          alert("Debes elegir un regalo");
          regalo.focus();
        }
      });
    }
    //menu programa del evento

    $("div.ocultar").hide();
    $(".programa-evento .info-curso:first").show();
    $(".menu-programa a:first").addClass("activo");

    $(".menu-programa a").on("click", function () {
      $("div.ocultar").hide();
      $(".menu-programa a").removeClass("activo");
      $(this).addClass("activo");
      var enlacePrecionado = $(this).attr("href");
      console.log(enlacePrecionado);
      $(enlacePrecionado).fadeIn(1000);
      return false;
    });

    // animaciones para los numeros
    var resumenEvento = $(".resumen-evento");
    if (resumenEvento.length > 0) {
      console.log("existe");
      $(".resumen-evento").waypoint(
        function () {
          $(".resumen-evento li:nth-child(1) p").animateNumber(
            { number: 6 },
            1000
          );
          $(".resumen-evento li:nth-child(2) p").animateNumber(
            { number: 15 },
            1000
          );
          $(".resumen-evento li:nth-child(3) p").animateNumber(
            { number: 3 },
            1000
          );
          $(".resumen-evento li:nth-child(4) p").animateNumber(
            { number: 9 },
            1000
          );
        },
        {
          offset: "60%",
        }
      );
    }

    // Cuenta Regresiva
    if ($(".cuenta-regresiva").length > 0) {
      $(".cuenta-regresiva").countdown("2020/09/16", function (event) {
        $("#dias").html(event.strftime("%D"));
        $("#horas").html(event.strftime("%H"));
        $("#minutos").html(event.strftime("%M"));
        $("#segundos").html(event.strftime("%S"));
      });
    }
    // colorbox
    $(".invitado_info").colorbox({ inline: true, width: "50%" });
  }); // dom content loaded
})();
