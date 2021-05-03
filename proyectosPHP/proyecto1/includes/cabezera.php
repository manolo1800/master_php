<!--requires-->
<?php require_once 'includes/conexion.php';?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog de juegos</title>
    <link rel="shortcut icon" href="./img/icono.png" />
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    
    <!--cabezera-->
    <header id="cabezera">
        <div id="logo">
            <a href="index.php">
            <img src="./img/icono.png" width="13%" height="45%">Blog de videojuegos 
            </a>
        </div>
        
        <!---menu----->
        <nav id="menu">

            <ul>
                <li>
                    <a href="index.php">inicio</a>
                </li>
                <?php
                    $categorias_c=mostrarCategorias($conexion);
                    while($categoria_c = mysqli_fetch_assoc($categorias_c) ):
                ?>
                    <li>
                        <a href="categorias.php?id=<?=$categoria_c['id']?>"><?=$categoria_c['nombre']?></a>
                    </li>
                <?php endwhile;?>
                <li>
                    <a href="index.php"> sobre mi</a>
                </li>
                <li>
                    <a href="index.php"> contacto</a>
                </li>
            </ul>

        </nav>

        <div class="clearfix"></div>

    </header>
    <div id="contenedor">
    

   