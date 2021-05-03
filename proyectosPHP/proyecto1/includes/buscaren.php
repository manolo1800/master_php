<?php

    if(isset($_POST))
    {
        require_once 'conexion.php';
    
        
        $busc=isset($_POST['buscar']) ? mysqli_real_escape_string($conexion,$_POST['buscar']) : false;
        
        $_SESSION['buscar']=$busc;

        
        
    }header("location:../buscar.php");

?>