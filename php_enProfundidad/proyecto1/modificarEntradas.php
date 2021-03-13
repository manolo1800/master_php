<?php require_once 'includes/redireccion.php';?>
<? require_once 'includes/conexion.php';?>

<?php $usuar=$_SESSION['usuario']['id'];?>
<?php if(!isset($_GET['id']) && !isset($_SESSION['cambiard'])): ?>
<?  header("location:modificarEntradas.php?id=$usuar"); ?>
<?php endif;?>

<?php require_once 'includes/redireccion.php';?>
<? require_once 'includes/helpers.php';?>


<?php   
       
    if(!isset($_SESSION['cambiard'])):
        $entradas_m=mostrarEntradas($conexion, true, null, $_GET['id']);
    endif;    
?>


<?php require_once 'includes/cabezera.php';?>
<? require_once 'includes/sidebar.php';?>


<div id="principal">
        
        <?php 
              if(!isset($_SESSION['cambiard'])):
        ?>
         <h1>alterar o borrar mis entradas</h1><br/><br/><br/>
        <?php        
              while($entrada_m = mysqli_fetch_assoc($entradas_m)):  
        ?>

                <article class="entrada">
                    <a href="includes/cambiaren.php?id=<?=$entrada_m['id']?>">
                        <h2><?=$entrada_m['titulo']?></h2>
                        <spam class="fecha"><?=$entrada_m['categoria']. "|" . $entrada_m['fecha'] ?></spam>
                        <p>
                            <?=substr($entrada_m['descripcion'], 0,180). ' '. "..."?>
                        </p>
                    </a>
                </article>
        <?php endwhile;
              endif;?>
        <?php if(isset($_SESSION['cambiard'])): ?>
            <h1>alterar mi entrada</h1><br/><br/><br/>
            <?php
                $ent=$_SESSION['entrada']; 
                $entradaM=mostrarEntrada($conexion,$ent) 
            ?>
            <?php if(isset($_SESSION['completado'])):?>
                    <div class="alerta alerta-exitoso">
                        <?=$_SESSION['completado']; ?>
                    </div>
            <?php elseif(isset($_SESSION['errores']['general'])):?>
                    <div class="alerta alerta-error">
                        <?=$_SESSION['errores']['general'] ?>
                    </div>
            <?php endif;?>            
            <div id="main">
                <div class="floatdiv">
                    <form method="POST" action="includes/cambiarEntradas.php"> 
                        <input type="text" name="titulo" value="<?=$entradaM['titulo']?>">
                        <p>
                            <textarea name="descripcion" rows="5" cols="85"><?=ltrim($entradaM['descripcion'])?></textarea>
                        </p>
                        <input type="submit" value="cambiar">    
                    </form>
                </div>    
                <div class="floatdivi">    
                    <form method="POST" action="includes/borraren.php">
                        <input type="submit" name="borrar" value="borrar">
                    </form>
                    <form method="POST" action="includes/cambiaren.php">
                        <input type="submit" name="cancelar" value="volver atras">
                    </form>
                </div>  
            </div>
        <?php endif;?>
        <?echo borrarErrores();?>
</div> 
        
        
<div class="clearfix"></div>         
    <!---pie de pagina----->
<?php require_once 'includes/footer.php' ;?>