<?php

    require_once 'configuracion.php';

    configuracion::setcolor("rojo");
    configuracion::setentorno("localhost");
    configuracion::setnewsletter(true);

    echo configuracion::$color. '<br/>';
    echo configuracion::$entorno. '<br/>';
    echo configuracion::$newsletter. '<br/>';
?>