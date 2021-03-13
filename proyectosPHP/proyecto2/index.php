<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>tienda camiseta</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div id="container">
        <!--CABECERA-->
            
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="camiseta logo">
                    <a href="index.php">Tienda de camisetas</a>
                </div>
            </header>    
        
        <!--MENU-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">inicio</a>
                    </li>

                    <li>
                        <a href="index.php">categoria 1</a>
                    </li>

                    <li>
                        <a href="index.php">categoria 2</a>
                    </li>

                    <li>
                        <a href="index.php">categoria 3</a>
                    </li>

                    <li>
                        <a href="index.php">categoria 4</a>
                    </li>

                    <li>
                        <a href="index.php">categoria 5</a>
                    </li>
                </ul>
            </nav>
        
        <div id="content">
            <!--BARRA LATERAL-->
                <aside id="lateral">
                    <div id="loign" class="block_aside">
                        <h3>entrar a la web</h3>
                        <form action="" method="">
                            <!--
                            <label for="nombre">nombre</label>
                            <input type="text" name="nombre"/>
                            
                            <label for="apellido">apellido</label>
                            <input type="text" name="apellido"/>
                            -->
                            <label for="email">email</label>
                            <input type="email" name="email"/>
                            
                            <label for="password">password</label>
                            <input type="password" name="password">
                            
                            <input type="submit" value="submit">
                        </form>
                        <ul>
                            <li><img src="assets/img/carrito-de-compras.png"><a href="#"> Mis pedidos</a></li>
                            <li><img src="assets/img/camion-de-reparto.png"><a href="#"> Gestionar pedidos</a></li>
                            <li><img src="assets/img/sistema-de-gestion-de-contenidos.png"><a href="#"> gestionar categorias</a></li>
                        </ul>    
                    </div>
                </aside>

            <!--CONTENIDO CENTRAL-->
                <div id="central">
                    <h1>Productos destacasdos</h1>
                    <div id="product">
                        <img src="assets/img/camiseta.png">
                        <h2>camiseta azul olgada</h2>
                        <p>30 euros</p>
                        <a href="#" class="button">comprar</a>
                    </div>

                    <div id="product">
                        <img src="assets/img/camiseta.png">
                        <h2>camiseta azul apretada</h2>
                        <p>30 euros</p>
                        <a href="#" class="button">comprar</a>
                    </div>
                    
                    <div id="product">
                        <img src="assets/img/camiseta.png">
                        <h2>camiseta azul de tela</h2>
                        <p>30 euros</p>
                        <a href="#" class="button">comprar</a>
                    </div>

                    <div id="product">
                        <img src="assets/img/camiseta.png">
                        <h2>camiseta azul de tela</h2>
                        <p>30 euros</p>
                        <a href="#" class="button">comprar</a>
                    </div>

                    <div id="product">
                        <img src="assets/img/camiseta.png">
                        <h2>camiseta azul de tela</h2>
                        <p>30 euros</p>
                        <a href="#" class="button">comprar</a>
                    </div>
                    <div id="product">
                        <img src="assets/img/camiseta.png">
                        <h2>camiseta azul de tela</h2>
                        <p>30 euros</p>
                        <a href="#" class="button">comprar</a>
                    </div>
                </div>
        </div>
        
        <!--PIE DE PAGINA-->
            <footer id="footer">
                <p>desarrollado por manuel cisneros &copy; <?=date('Y')?></p>
            </footer>
    </div>
</body>
</html>