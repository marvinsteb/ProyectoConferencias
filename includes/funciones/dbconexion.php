<?php
  $conexion = new mysqli('localhost','root','root','proyectoconferencias');
  if($conexion->connect_error); {
    echo $error = $conexion->connect_error;
  }
?>