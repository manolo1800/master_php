<?php
    
    
    require_once 'conexion.php'; 
    
    if(isset($_POST['cambiar']))
    {
        $nombre= isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,trim($_POST['nombre'])) : false;
        $apellidos=isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion,trim($_POST['apellidos'])) : false; 
        $email=isset($_POST['email']) ? mysqli_real_escape_string($conexion,trim($_POST['email'])) : false;
        //echo var_dump($_POST);
        
        //array que contiene los errores introducidos por post
        $errors=array();
        
        //validar los datos antes de guardarlos en la base de datos
        
        //validar nombre
        if(!is_numeric($nombre) && !preg_match("/[0-9]/", $nombre))
        {
            $nombre_valido=true;
        }else{
            $nombre_valido=false;
            $errors['nombre']="verifique si esta correcto el nombre";
        }

        //validar apellidos
        if(!is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos))
        {
            $apellidos_valido=true;
        }else{
                $apellidos_valido=false;
                $errors['apellidos']="verifique si esta correcto el apellido";
            }
            
        //validar email
        if(isset($email) || filter_var($email,FILTER_VALIDATE_EMAIL) )
        {
            $email_valido=true;
        }else{
            $email_valido=false;
            $errors['email']="el email no es valida";
        }
        //echo var_dump($errors);
        
        if(empty($nombre))
        {
            $nombre=$_SESSION['usuario']['nombre'];   
        }
        if(empty($apellidos))
        {
            $apellidos=$_SESSION['usuario']['apellidos'];
        }
        if( empty($email))
        {
            $email=$_SESSION['usuario']['email'];
        }
        if(count($errors) == 0)
        {
            
            $sql="UPDATE usuarios SET nombre = '$nombre', ".  
                "apellidos = '$apellidos', ".
                "email = '$email' ".
                "WHERE id = ". $_SESSION['usuario']['id'];
                $update=mysqli_query($conexion,$sql);
            
            if($update)
            {
                $_SESSION['usuario']['nombre']=$nombre;
                $_SESSION['usuario']['apellidos']=$apellidos;
                $_SESSION['usuario']['email']=$email;
                $_SESSION['completado']="se han actualizado los datos de forma exitosa";
            }else{
                $_SESSION['errores']['general']="actualizacion fallida";
            }
            
        }else{
            $_SESSION['errores']= $errors;    
        }
    }
    header('location:../misdatos.php');
?>