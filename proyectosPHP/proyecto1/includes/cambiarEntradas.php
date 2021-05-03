<?php
    require_once 'conexion.php';
    require_once 'helpers.php';
    $usuar=$_SESSION['usuario']['id'];
    $ent=$_SESSION['entrada'];
    
    
    if(isset($_POST))
    {
        $titulo=isset($_POST['titulo']) ? mysqli_real_escape_string($conexion,trim($_POST['titulo'])) : false;
        $descripcion=isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion,trim($_POST['descripcion'])) : false;

        $entradaM=mostrarEntrada($conexion,$usuar);
        
        if(empty($titulo))
        {
            $titulo=$entradaM['titulo'];   
        }
        if(empty($descripcion))
        {
            $descripcion=$entradaM['descripcion'];
        }
        
        if(!empty($titulo) && !empty($descripcion))
        {
            $sql="UPDATE entradas SET titulo='$titulo', descripcion='$descripcion' WHERE id='$ent' ";
            $update=mysqli_query($conexion,$sql);

            if($update)
            {
                
                $_SESSION['completado']="se han actualizado los datos de forma exitosa";
                $_SESSION['cambiard']=' ';
            }else{
                $_SESSION['errores']['general']="actualizacion fallida";
            }
            
        }else{
            $_SESSION['errores']=$errors;    
        }

        
    } 
    
    /*if(isset($_POST['borrar']))
    {
        $sql="DELETE entradas WHERE id='$ent' ";
        $delete=mysqli_query($conexion,$sql);
        if($delete)
        {
            $_SESSION['completado']="se ha borrado la entrada de forma exitosa"; 
        }
    }*/
    header("location:../modificarEntradas.php?id=$ent");
?>