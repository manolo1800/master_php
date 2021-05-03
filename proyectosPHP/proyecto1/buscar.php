<?php require_once 'includes/cabezera.php';?>
<?php require_once 'includes/sidebar.php';?>
<? require_once 'includes/helpers.php';?>

<div id="principal">
            
            
            <?php 
                $bus=$_SESSION['buscar'];
                
                $entradas=mostrarEntradas($conexion,true,null,null,$bus);
                
                if(!empty($entradas)):  
                    while($entrada=mysqli_fetch_assoc($entradas)):  
            ?>

                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id'] ?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <spam class="fecha"><?=$entrada['categoria']. "|" . $entrada['fecha'] ?></spam>
                        <p>
                            <?=substr($entrada['descripcion'], 0,180). ' '. "..."?>
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