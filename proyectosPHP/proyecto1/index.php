<!--cabezera-->
<? require_once 'includes/cabezera.php';?>
    
     
    <!---barra lateral----->
    <? require_once 'includes/sidebar.php';?>
       

        <!---caja principal----->
    
        <div id="principal">
            <h1>ultimas entradas</h1><br/><br/><br/>
            
            <?php $entradas=mostrarEntradas($conexion, true);
                /*if(!empty($entradas)):*/  
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
                /*endif;*/    ?>
            <!--fin principal-->
            <div id="ver-todas">

                <a href="entradas.php">ver todas las entradas</a>
        
            </div>
        </div> 
        
       
        
    <!---pie de pagina----->
    <?php require_once 'includes/footer.php' ;?>

