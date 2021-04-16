<h1>Algunos de nuestros productos</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register']=="complete" ): ?>
    <script>window.alert('registro exitoso')</script> 

<?php elseif(isset($_SESSION['register']) && $_SESSION['register']=="failed"):?>
    <script>window.alert('registro fallido')</script> 
   
<?php endif; ?>

<?php  Utils::deleteSession('register');  ?> 
                    
                <?php while($prod=$productos->fetch_object()): ?>    
                    <div id="product">
                        <?php if(isset($prod) && is_object($prod) && !empty($prod->imagen)): ?>
                            <a href="<?=base_url?>Producto/mostrar&id=<?=$prod->id?>"><img src="<?=base_url?>uploads/images/producto/<?=$prod->imagen?>"/></a>
                        <?php endif; ?>
                        <a href="<?=base_url?>Producto/mostrar&id=<?=$prod->id?>"><h2><?=$prod->nombre?></h2></a>
                        <p>$<?=$prod->precio?></p>
                        <a href="<?=base_url?>Pedidos/comprar" class="button">comprar</a>
                        <a href="<?=base_url?>Pedidos/agregar al carrito" class="button">agregar al carrito</a>
                    </div>
                <?php endwhile; ?>
                    