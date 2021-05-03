
<h1>carrito de compras</h1>
<?php if(isset($carrito) && !empty($carrito)):?>
    <table>
        
        <tr>
            <th>imagen</th>
            <th>nombre</th>
            <th>precio</th>
            <th>unidades</th>
            <th></th>
        </tr>
        
            <?PHP 
                foreach($carrito as $indice => $elemento):
                  
                $producto= $elemento['producto'];  
            ?>
                <tr>
                    <td>
                        <img src="<?=base_url?>uploads/images/producto/<?=$producto->imagen?>" class="img-carrito" />
                    </td>
                    <td><a href="<?=base_url?>Producto/mostrar&id=<?=$producto->id?>"><?=$producto->nombre?></a></td>
                    <td><?=$elemento['precio']?></td>
                    <td>
                        <a href="<?=base_url?>Carrito/sum&indice=<?=$indice?>" class="button button-count">+</a>
                        <?=$elemento['unidades']?>
                        <a href="<?=base_url?>Carrito/rest&indice=<?=$indice?>" class="button button-count">-</a>
                    </td>

                    <td><a href="<?=base_url?>Carrito/remove&indice=<?=$indice?>" class="button  button-delete-prod">eliminar producto</a></td>
                </tr>

            <?PHP endforeach; ?>    

            
        
    </table>

    <?php $stats=Utils::statisticsCarritos(); ?>
    <div class="total_carrito">
        <h3 class="text-carrito" >total: $<?=$stats['total']?></h3>
        <a href="<?=base_url?>Pedido/hacer" class="button  button-carrito">hacer pedido</a>
        <a href="<?=base_url?>Carrito/delete_all" class="button  button--carrito-delete">eliminar pedidos</a>
    </div>
<?php else:?>

    <?php Utils::deleteSession('carrito'); ?>
    <script type="text/javascript"> alert("aun no tienes pedidos");
                                    window.location.href ="<?=base_url?>Producto/destacados" </script>
    

<?php endif;?>