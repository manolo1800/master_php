<?php require_once 'includes/helpers.php';?>
<?php require_once 'includes/conexion.php'?>

<?php $entradas_ea=mostrarEntrada($conexion,$_GET['id'])?>

<?php require_once 'includes/cabezera.php';?>
<? require_once 'includes/sidebar.php';?>

<div id="principal">
            <h1><?=$entradas_ea['titulo']?></h1><br/><br/><br/>
            
            

                <article class="entrada">
                    
                        
                        <spam class="fecha"><?=$entradas_ea['categoria']. "|" . $entradas_ea['fecha'] ?></spam><br/><br/>
                        <p>
                            <?=$entradas_ea['descripcion']?>
                        </p>
                   
                </article>
            
            <!--fin principal-->
            
        </div> 
        
     
        
    <!---pie de pagina----->
    <?php require_once 'includes/footer.php' ;?>