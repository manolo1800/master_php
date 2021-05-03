<?php
    
    if(isset($_POST['submit']))
    {
        require_once 'conexion.php';
        
        if(!isset($_SESSION))
        {
            session_start();
        }
       
        //recoger valores del formulario registro
        $nombre= isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,trim($_POST['nombre'])) : false;
        $apellido=isset($_POST['apellido']) ? mysqli_real_escape_string($conexion,trim($_POST['apellido'])) : false; 
        $email=isset($_POST['email']) ? mysqli_real_escape_string($conexion,trim($_POST['email'])) : false;
        $password=isset($_POST['password']) ? mysqli_real_escape_string($conexion,trim($_POST['password'])): false;
        //echo var_dump($_POST);
        
        //array que contiene los errores introducidos por post
        $errores=array();
        
        //validar los datos antes de guardarlos en la base de datos
        
        //validar nombre
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre))
        {
            $nombre_valido=true;
        }else{
            $nombre_valido=false;
            $errores['nombre']="verifique si esta correcto el nombre";
        }

        //validar apellidos
        if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido))
        {
            $apellido_valido=true;
        }else{
            $apellido_valido=false;
            $errores['apellido']="verifique si esta correcto el apellido";
        }
        
        //validar email
        if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL) )
        {
            $email_valido=true;
        }else{
            $email_invalido=false;
            $errores['email']="el email no es valida";
        }

        //validar password
        if(!empty($password))
        {
            $password_valido=true;
        }else{
            $password_valido=false;
            $errores['password']="la contraseña es invalida";
        }
        
        //echo var_dump($errores);
        
        //guardar datos usuario
        $guardar_usuario=false;
        
        if(count($errores) == 0)
        {
            $guardar_usuario=true;
            
            //cifrar la contraseña
            $password_segura=password_hash($password,PASSWORD_BCRYPT, ['cost=>4']);
            
            //insertar usuario en la tabla usuario de la tabla bd
            
            //consulta para insertar datos
            $sql="INSERT INTO usuarios VALUES 
                     (NULL,'$nombre','$apellido','$email','$password_segura', CURDATE())";
            
            //condicional: del servidor a la db
            if(mysqli_query($conexion,$sql))
            {
                $_SESSION['completado']="registro exitoso";
            }else{
                $_SESSION['errores']['general']="registro fallido";
            }
        
        }else{
            $_SESSION['errores']= $errores;
            
        }
    }
    header('location:../index.php')

?>