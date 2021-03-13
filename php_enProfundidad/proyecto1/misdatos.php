<!--requires-->
<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/cabezera.php';?>
<? require_once 'includes/sidebar.php';?>


<div id="principal">
    <h1>mis datos</h1><br/><br/><br/>
    <?php if(isset($_SESSION['completado'])):?>
        <div class="alerta alerta-exitoso">
            <?=$_SESSION['completado']; ?>
        </div>
    <?php elseif(isset($_SESSION['errores']['general'])):?>
        <div class="alerta alerta-error">
            <?=$_SESSION['errores']['general'] ?>
        </div>        
    <?php endif;?>    
  <?php if(!isset($_SESSION['cambiard'])):?>   
        <?=$_SESSION['usuario']['nombre']. "<br/>" ;?>
        <?=$_SESSION['usuario']['apellidos']. "<br/>";?>
        <?=$_SESSION['usuario']['email']. "<br/>";?>
    
        <form action="includes/cambiard.php" method="POST">
                <br/><input type="submit" name="cambiard" value="cambiar datos" class="boton"><br/><br/>
    <?php else: ?>
            
            <form method="POST" action="includes/cambiardatos.php">
                <label for='nombre'>nombre</label>
                <input type='text' name='nombre'>

                <label for='apellidos'>apellidos</label>
                <input type='text' name='apellidos'>

                <label for='email'>email</label>
                <input type='email' name='email'>

                <input type="submit" name="cambiar" value="cambiar">
            </form> 

    <?php endif;?>   
        </form>
    <?php echo borrarErrores();?>  
</div> 

<div class="clearfix"></div>
<!---pie de pagina----->
<?php require_once 'includes/footer.php' ;?> 