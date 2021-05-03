<?php

    require_once 'coche.php';

    $coche= new Coche("amarillo","renault","clio",150,200,5);
    
    echo $coche->getinformacion($coche);

?>