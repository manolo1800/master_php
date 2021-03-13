<?php require_once 'includes/helpers.php';?>
<?php require_once 'includes/conexion.php'?>
 
<?php 
    $cat=$_GET['id'];
    $categoria_cs= mostrarCategoria($conexion,$cat);
    if(!isset($categoria_cs['id']))
    {
        header('location:index.php');
    }

?>

<?php require_once 'includes/cabezera.php';?>
<?php require_once 'includes/sidebar.php';?>



<div id="principal">
            <h1>entradas de <?=$categoria_cs['nombre'];?></h1><br/><br/><br/>
            
            <?php $entradas_cs=mostrarEntradas($conexion, true , $cat);
                if(!empty($entradas_cs)):  
                    while($entrada_cs=mysqli_fetch_assoc($entradas_cs)):  
            ?>

                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada_cs['id'] ?>">
                        <h2><?=$entrada_cs['titulo']?></h2>
                        <spam class="fecha"><?=$entrada_cs['categoria']. "|" . $entrada_cs['fecha'] ?></spam>
                        <p>
                            <?=substr($entrada_cs['descripcion'], 0,180). ' '. "..."?>
                        </p>
                    </a>
                </article>
            <?php 
                    endwhile;
                endif;  ?>
            <!--fin principal-->
            
        </div> 
        <div class="clearfix"></div>         
    <!---pie de pagina----->
<?php require_once 'includes/footer.php' ;?>        