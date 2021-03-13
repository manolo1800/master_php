        
        <!---barra lateral----->
        <aside id="sidebar">
            <!-- buscador  -->
            <div id="buscar" class="bloque">
                    <h3>buscar</h3>
                    
                    <form action="includes/buscaren.php" method="POST">
                               
                        <input type="text" name="buscar">

                        <input type="submit" value="iniciar busqueda">
                    </form>
            </div>
            
            
            <?php if(isset($_SESSION['usuario'])):?>
                <div id="usuario-logueado" class="bloque">
                    <h3>bienvenido <br/><?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>

                    <!--botones-->
                    <a href="crearEntradas.php" class="boton">crear entradas</a>
                    <a href="modificarEntradas.php?id=<?=$_SESSION['usuario']['id']?>" class="boton">alterar entradas</a>
                    <a href="crearCategoria.php" class="boton">crear categorias</a>
                    <a href="misdatos.php" class="boton">mis datos</a>
                    <a href="includes/cerrarSesion.php" class="boton-rojo">cerrar sesion</a>
                </div>
            <?php endif; ?>
                
            <?php if(!isset($_SESSION['usuario'])):?>
                <div id="login" class="bloque">
                    <h3>identificate</h3>
                    <?php if(isset($_SESSION['error_login'])):?>
                        <div class="alerta alerta-error">
                            <?=$_SESSION['error_login']?>
                        </div>
                    <?php endif; ?>  
                    <form action="http://localhost/master_php/php_enProfundidad/proyecto1/includes/login.php" method="post">

                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="sdjkfasd@jkdlsfj.kjdf">
                        
                        <label for="password">contraseña</label>
                        <input type="password" name="password">

                        <input type="submit" value="entrar">
                    </form>
                </div>
            
                <div id="registrar" class="bloque">
                    
                    <h3>registrar</h3>
                    <!--mostrar si se han insertado bien los datos en la bd o sino se insertaron-->
                    <?php if(isset($_SESSION['completado'])):?>
                        <div class="alerta alerta-exitoso">
                            <?=$_SESSION['completado']; ?>
                        </div>
                    <?php elseif(isset($_SESSION['errores']['general'])):?>
                        <div class="alerta alerta-error">
                            <?=$_SESSION['errores']['general'] ?>
                        </div>        
                    <?php endif;?>    
                    
                    <form action="http://localhost/master_php/php_enProfundidad/proyecto1/includes/registrar.php" method="post">
                        
                        <!--funcion que muestra los errores de los campos cuando no se 
                        introducen bien-->
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'] , 'nombre'): ''; ?>
                        <label for="nombre">nombre</label>
                        <input type="text" name="nombre"><br/>
                        
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'] , 'apellido'): ''; ?>
                        <label for="apellido">apellido</label>
                        <input type="text" name="apellido"><br/>
                        
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'] , 'email'): ''; ?>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="sdjkfasd@jkdlsfj.kjdf"><br/>
                        
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'] , 'password'): ''; ?>
                        <label for="password">contraseña</label>
                        <input type="password" name="password">
                        

                        <input type="submit" name="submit" value="registrar">
                    </form>
                    <?php echo borrarErrores();?>
                </div>
            <?php endif;?>    
        </aside>