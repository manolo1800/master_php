<?php $prod=$productos; ?>

<h1><?=$prod->nombre?></h1>

<div class="mostrar">

    <?php if(isset($prod) && is_object($prod) && !empty($prod->imagen)): ?>
            <img src="<?=base_url?>uploads/images/producto/<?=$prod->imagen?>"/>
    <?php endif; ?>
            
    <div class="mostrar-text">    
        <p class="descripcion"><?=$prod->descripcion?></p>
        <p class="price">$<?=$prod->precio?></p>
        
        <?php if($prod->oferta !=0 ):?>
            <p><?=$prod->oferta?>%</p>
        <?php endif; ?>    
    </div>        
    <a href="<?=base_url?>Carrito/add&id=<?=$prod->id?>" class="button button-ms">agregar al carrito</a>
    
</div>    