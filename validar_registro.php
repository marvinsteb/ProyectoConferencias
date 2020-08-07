  <?php if(isset($_POST['submit'])){ 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido']; 
    $email = $_POST['email']; 
    $regalo = $_POST['regalo']; 
    $total = $_POST['total_pedido']; 
    $fecha = date('Y-m-d H:i:s'); 
    $boletos = $_POST['boletos'];
    $camisa = $_POST['pedido_camisas'];
    $etiquetas = $_POST['pedido_etiquetas'];
    include_once 'includes/funciones/funciones.php';
    $pedido =  productos_jason($boletos,$camisa,$etiquetas);
    $eventos = $_POST['registro'];
    $registros = eventos_json($eventos);
    try {
      require_once('includes/funciones/dbconexion.php');
      $stmt = $conexion->prepare("INSERT INTO `proyectoconferencias`.`registrado`
                                  (`nombre`,
                                  `apellido`,
                                  `email`,
                                  `fecha_registro`,
                                  `pases_articulos`,
                                  `talleres_registrados`,
                                  `regalo`,
                                  `total_pagado`)
                                  VALUES
                                  (?,?,?,?,?,?,?,?);");
      $stmt->bind_param("ssssssis",$nombre,$apellido,$email,$fecha,$pedido,$registros,$regalo,$total);
      $stmt->execute();
      $stmt->close();
      $conexion->close();
      header('Location: validar_registro.php?exitoso=1');
    } catch (Exception $e) {
      $error = $e->getMessage();
      echo $error;
    }
     ?>
  <?php } ?>


<?php include_once 'includes/templates/header.php'?>

<section class="seccion contenedor">
  <h2>Resumen Registro</h2>
    <?php
    if(isset($_GET['exitoso'])){
      if($_GET['exitoso'] == 1){
        echo "Registro Exitoso";
      }
    } 
    ?>
</section>
<?php include_once 'includes/templates/footer.php'?>