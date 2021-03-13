<?php 
    if(isset($_POST['crear']))
    {
        require_once 'conexion.php';

        if(!isset($_SESSION))
        {
            session_start();
        }
        $nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,trim($_POST['nombre'])) : false;
        
        
        //validar los datos antes de guardarlos en la base de datos
        
        //validar nombre
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre))
        {
            $nombre_valido=true;
        }else{
            $nombre_valido=false;
            $error="verifique si esta correcto el nombre";
        }
        if(count($error) == 0)
        {
            $sql="INSERT INTO categorias VALUES (null,'$nombre');";
            $insert=mysqli_query($conexion,$sql);

            //condicional: del servidor a la db
            if($insert)
            {
                $_SESSION['realizado']="se creo la categoria de forma exitosa";
            }else{
                $_SESSION['error']['general']="creacion de categoria fallida";
            }

        }else{
            $_SESSION['error']= $error;
            
        }

        
    }header('location:../crearCategoria.php')
?>