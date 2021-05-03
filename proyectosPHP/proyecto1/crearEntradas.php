<!--requires-->
<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/cabezera.php';?>
<?php require_once 'includes/sidebar.php';?>
<?php require_once 'includes/helpers.php';?>

<div id="principal">
        <h1>crear entradas</h1><br/><br/><br/>
        <form method="POST" action="includes/insertardatosent.php">
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
                        <?=$_SESSION['error'];?>
                    </div>            
            <?php endif;?>

            <label for="titulo">titulo de entrada</label>
            <input type="text" name="titulo"><br/>

            <label for="descripcion">descripcion</label>
            <input type="text" name="descripcion"><br/>
            
            <label for="categorias">seleccionar categoria</label>
            <select name="categorias">
                <?php
                    $categorias=mostrarCategorias($conexion);
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias) ):
                ?>
                            <option value="<?=$categoria['id']?>" >
                                <?=$categoria['nombre']?>
                            </option>
                        <?php endwhile;
                    endif;  
                ?>
            
            <input type="submit" name="crear" class="crear">
        </form>
        <?echo borrarErrores();?>
</div> 

<div class="clearfix"></div> 
<?php require_once 'includes/footer.php' ;?>