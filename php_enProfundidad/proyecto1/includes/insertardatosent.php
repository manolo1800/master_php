<?php 
    if(isset($_POST['crear']))
    {
        require_once 'conexion.php';
        
        
        if(!isset($_SESSION))
        {
            session_start();
        }
        //validacion de datos
        $titulo=isset($_POST['titulo']) ? mysqli_real_escape_string($conexion,trim($_POST['titulo'])) : false;
        $descripcion=isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion,trim($_POST['descripcion'])) : false;
        $usuarid=$_SESSION['usuario']['id'];
        $categoid=isset($_POST['categorias']) ? mysqli_real_escape_string($conexion,trim($_POST['categorias'])) : false;
        
        $error=array();

        if(!empty($titulo))
        {
            $titulo_valido=true;
        }else{
            $titulo_valido=false;
            $error['titulo']="verifique si el titulo esta correcto";
        }
        
        if(!empty($descripcion))
        {
            $descripcion_valido=true;
        }else{
            $descripcion_valido=false;
            $error['descripcion']="verifique si la descripcion esta correcto";
        }
        if(!empty($categoid))
        {
            $descripcion_valido=true;
        }else{
            $descripcion_valido=false;
            $error['categoria']="seleccione una categoria, si no existe puede crearla ";
        }
        if(count($error)==0)
        {
            $sql="INSERT INTO entradas VALUES (null,'$usuarid','$categoid','$titulo','$descripcion',CURDATE());";
            $insert=mysqli_query($conexion,$sql);
    
            //condicional: del servidor a la db
            if($insert)
            {
                $_SESSION['realizado']="se creo la entrada de forma exitosa";
            }else{
                $_SESSION['error']['general']="creacion de entrada fallida";
            }
        }else{
            $_SESSION['error']=$error;
        }

        
    }header('location:../crearEntradas.php')
?>