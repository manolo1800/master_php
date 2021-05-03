<?php require_once 'includes/cabezera.php';?>
<? require_once 'includes/sidebar.php';?>


<div id="principal">
            <h1>entradas</h1><br/><br/><br/>
            
            <?php $entradas=mostrarEntradas($conexion);
                  while($entrada = mysqli_fetch_assoc($entradas)):  
            ?>

                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <spam class="fecha"><?=$entrada['categoria']. "|" . $entrada['fecha'] ?></spam>
                        <p>
                            <?=substr($entrada['descripcion'], 0,180). ' '. "..."?>
                        </p>
                    </a>
                </article>
            <?php endwhile;?>
            <!--fin principal-->
            
        </div> 
        
       
        
    <!---pie de pagina----->
    <?php require_once 'includes/footer.php' ;?>