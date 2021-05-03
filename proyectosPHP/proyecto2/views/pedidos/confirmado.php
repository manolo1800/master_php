<?php Utils::isLogin() ?>
<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'true'):?>
    <script>window.alert('pedido procesado exitosamente')</script> 
    <h1>Pedido confirmado</h1>

    <p>pedido confirmado una vez realices la transaccion bancaria con el coste del pedido sera procesado y enviado</p>

    numero de pedido: <?=$pedido->id?><br>
    coste: <?=$pedido->coste?><br>
    productos: <br>
    <table>
    
        <tr>
            <th>imagen</th>
            <th>nombre</th>
            <th>precio</th>
            <th>unidades</th>
        </tr> 
        <?php while($producto = $productos->fetch_object()): ?>
        
            <tr>
                <td>
                    <img src="<?=base_url?>uploads/images/producto/<?=$producto->imagen?>" class="img-carrito" />
                </td>
                <td><a href="<?=base_url?>Producto/mostrar&id=<?=$producto->id?>"><?=$producto->nombre?></a></td>
                <td><?=$producto->precio?></td>
                <td><?=$producto->unidades?></td>
            </tr>
         
      
        <?php endwhile; ?>
    </table>        


<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'true'):?>
    <script>window.alert('el pedido no se pudo completar')</script> 
    <h1>el pedido no se ha procesado aun</h1>
<?php endif;?>


<?php  Utils::deleteSession('pedid'); ?> 