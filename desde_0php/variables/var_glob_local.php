<?php
    function buenasDias(){
        return "hola buenos dias";
    }
    function buenasTardes(){
        return "hola buenas tardes";
    }
    function buenasNoches (){
        return "hola buenas noches";
    }

    $horario=$_GET['hora'];

    $miFuncion="buenas".$horario;

    echo $miFuncion();
?>