<?php include_once 'includes/templates/header.php'?>
<section class="seccion contenedor">
  <h2>Resumen Registro</h2>
  <?php if(isset($_POST['submit'])){ 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido']; 
    $email = $_POST['email']; 
    $regalo = $_POST['regalo']; 
    $total = $_POST['total_pedido']; 
    $fecha = date('Y-m-d H:i:s'); 

    // pedido 
    $boletos = $_POST['boletos'];
    $camisa = $_POST['pedido_camisas'];
    $etiquetas = $_POST['pedido_etiquetas'];
    include_once 'includes/funciones/funciones.php';
    $pedido =  productos_jason($boletos,$camisa,$etiquetas);

    //eventos
    $eventos = $_POST['registro'];
    $registros = eventos_json($eventos);
     ?>
  <pre>
    <?php var_dump($registros);
    ?>
  </pre>
  <?php } ?>
</section>
<?php include_once 'includes/templates/footer.php'?>