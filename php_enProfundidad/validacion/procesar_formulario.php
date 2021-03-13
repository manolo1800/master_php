<?php
    
    $error='faltan datos';

    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email']) && 
        !empty($_POST['contraseña']))
    {
        $error='okey';
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $edad= (int) $_POST['edad'];
        $email=$_POST['email'];
        $contraseña=$_POST['contraseña'];
        
        if(!is_string($nombre) || preg_match("/[0-9]+/",$nombre))
        {
            $error='nombre';
        }
        if(!is_string($apellido) || preg_match("/[0-9]+/",$apellido))
        {
            $error='apellido';
        }
        if(!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT))
        {
            $error='edad';
        }
        if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $error='email';
        }
        if(empty($contraseña) || strlen ($contraseña)<5)
        {
            $error='contraseña';
        }

    }else
    {
        $error='faltan datos';
        header("Location:index.php?error=$error");
    };
    if($error != 'okey')
    {
        header("Location:index.php?error=$error");
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>procesar formulario</title>
</head>
<body>
    <h3>los datos del perfil son: </h3>
    <?php if($error=='okey') : ?>
        <p>Nombre: <?=$nombre?></p>
        <p>Apellido :<?=$apellido?></p>
        <p>Edad :<?=$edad?></p>
        <p>Email: <?=$email?></p>
    <?php endif; ?>    
</body>
</html>