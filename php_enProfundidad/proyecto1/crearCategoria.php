<!--requires-->
<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/cabezera.php';?>
<? require_once 'includes/sidebar.php';?>
<? require_once 'includes/helpers.php';?>

<div id="principal">
        <h1>crear categorias</h1><br/><br/><br/>
        <form method="POST" action="includes/insertardatoscat.php">
                <?php if(isset($_SESSION['realizado'])):?>
                    <div class="alerta alerta-exitoso">
                        <?=$_SESSION['realizado']; ?>
                    </div>
                <?php elseif(isset($_SESSION['error']['general'])):?>
                    <div class="alerta alerta-error">
                        <?=$_SESSION['error']['general'] ?>
                    </div>
                    <?php elseif(isset($_SESSION['error'])):?>
                    <div class="alerta alerta-error">
                        <?=$_SESSION['error'] ?>
                    </div>            
                <?php endif;?>
            <label for="nombre">nombre de la nueva categoria</label>
            <input type="text" name="nombre" placeholder="introduce el nombre de la categoria">
            <input type="submit" name="crear" value="crear">
        </form>
        <?echo borrarErrores();?>
</div> 
        
       
<div class="clearfix"></div>         
    <!---pie de pagina----->
<?php require_once 'includes/footer.php' ;?>