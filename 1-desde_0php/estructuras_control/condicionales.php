<?php
    $color="rojo";

    if($color=="rojo"){

        echo " este es color";
    }else{
        echo "este no es el color";
    }
    echo "<br>";
    $dia=2;
    switch($dia){
        case '1';
            echo 'lunes';
            break;

        case '2':
            echo 'martes';
            break;
        case '3':
            echo 'miercoles';
            break;    
    }
    
?>