<?php 
  function productos_jason(&$boletos,&$casmisas = 0, &$etiquetas =0 ){
    $dias = array( 0 => 'un_dia',1 => 'pase_completo',2=>'pase_2Dias' );
    $total_boletos = array_combine($dias,$boletos);
    echo "<pre>";
    echo var_dump($total_boletos);
    echo "</pre>";
  }
?>