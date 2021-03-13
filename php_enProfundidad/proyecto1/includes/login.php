<?php

//iniciar la sesion y la conexion
require_once 'conexion.php';
if(!isset($_SESSION))
{
    session_start();
}
//recoger datos del formulario
if(isset($_POST))
{
    //validar datos
    $email= isset($_POST['email']) ? mysqli_real_escape_string($conexion, trim($_POST['email'])) : false;
    $password= isset($_POST['password']) ? mysqli_real_escape_string($conexion, trim($_POST['password'])) : false;
    
    //consulta para comprobar las credenciales del usuario
    $login=mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email';");
    
    if($login && mysqli_num_rows($login) == 1)
    {
        $usuario= mysqli_fetch_assoc($login);
        
        //comprobar contraseña
        $verify=password_verify($password,$usuario['password']);

        if($verify)
        {
            //utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario']=$usuario;
            
            if(isset($_SESSION['error_login']))
            {
                session_unset($_SESSION['error_login']);
            }
        }else{
            //si algo falla enviar una sesion con el fallo 
            $_SESSION['error_login'] = "login incorrecto";
        }
    }else{
        //mensaje de error
        $_SESSION['error_login'] = "login incorrecto";
    }
        

    //comprobar la contraseña
   
    password_verify($password,$comprobar);
}
//redirigir index
header('location:../index.php');
 
?>