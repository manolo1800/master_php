<?php if(isset($categoria)):?>
<h1><?=$categoria->nombre?></h1>
<?php endif; ?>

<?php while($prod=$productos->fetch_object()): ?>    
    <div id="product">
    <?php if(isset($prod) && is_object($prod) && !empty($prod->imagen)): ?>
        <a href="<?=base_url?>Producto/mostrar&id=<?=$prod->id?>"><img src="<?=base_url?>uploads/images/producto/<?=$prod->imagen?>"/></a>
    <?php endif; ?>
    <a href="<?=base_url?>Producto/mostrar&id=<?=$prod->id?>"><h2><?=$prod->nombre?></h2></a>
    <p>$<?=$prod->precio?></p>
    <a href="<?=base_url?>Carrito/add&id=<?=$prod->id?>" class="button">agregar al carrito</a>
    </div>
<?php endwhile; ?>