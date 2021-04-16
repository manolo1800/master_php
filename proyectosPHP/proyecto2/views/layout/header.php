<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>tienda camiseta</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
</head>
<body>
    <div id="container">
        <!--CABECERA-->
            
            <header id="header">
                <div id="logo">
                    <img src="<?=base_url?>assets/img/camiseta.png" alt="camiseta logo">
                    <a href="<?=base_url?>Producto/destacados">Tienda de camisetas</a>
                </div>
            </header>    
        
        <!--MENU-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="<?=base_url?>">inicio</a>
                    </li>
                    <?php
                        $categorias=Utils::showCategorias();
                         while($cat=$categorias->fetch_object()): ?>
        
                        <li><a href="<?=base_url?>Categoria/ver&id=<?=$cat->id;?>"><?=$cat->nombre;?></a></li>
       
                    <?php endwhile; ?>
                    
                </ul>
            </nav>
        
        <div id="content">