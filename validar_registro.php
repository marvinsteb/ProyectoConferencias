<?php include_once 'includes/templates/header.php'?>
<section class="seccion contenedor">
  <h2>Resumen Registro</h2>
  <?php if(isset($_POST['submit'])){ ?>
  <pre>
    <?php var_dump($_POST); ?>
  </pre>
  <?php } ?>
</section>
<?php include_once 'includes/templates/footer.php'?>