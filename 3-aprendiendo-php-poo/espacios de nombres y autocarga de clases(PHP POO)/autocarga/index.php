<?php

    require_once 'autoload.php';

    $usuario= new Usuario();
    $categoria= new Categoria();
    $entrada= new Entrada();

    echo $usuario->nombre . "<br/>";
    echo $categoria->nombre . "<br/>";
    echo $entrada->titulo;

?>