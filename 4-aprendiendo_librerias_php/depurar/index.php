<?php
    require_once '../vendor/autoload.php';

    $frutas= array("manzana","naranja","sandia");
    \FB::log($frutas);
    echo "hola".$frutas[0];
    $nombres=array("ejecutivo"=>"juan","empleado"=>"pepito");
    \FB::log($nombres);
?>