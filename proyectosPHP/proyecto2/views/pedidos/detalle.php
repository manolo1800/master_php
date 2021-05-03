
<?php if(isset($pedido)):?>
    
    <h1>detalles del pedido <?=$pedido->id?></h1>
    
    <?php if(isset($_SESSION['admin'])): ?>
    
        <h3>cambiar estado del pedido</h3><br>

        <form action="<?=base_url?>Pedido/cambiarEstado&id=<?=$pedido->id?>" method="POST">
            <select name="estado" id="estado">
                
                    <option value="confirm">pendiente</option>
                    <option value="preparation">en preparacion</option>
                    <option value="ready">preparado para enviar</option>
                    <option value="sended">enviado</option>

                    <input type="submit" value="enviar">
    
            </select>
        </form>

    <?php endif; ?>
    
    <h3>datos del usuario</h3>
    id:<?=$pedido->usuario?><br>
    nombre: <?=$pedido->nombre?> <br>
    apellido: <?=$pedido->apellido?> <br>
    email: <?=$pedido->email?> <br><br><br>


    <h3>direccion de envio:</h3>
    provincia: <?=$pedido->provincia?><br>
    ciudad: <?=$pedido->localidad?><br>
    direccion: <?=$pedido->direccion?><br><br><br>
    
    <h3>datos del pedido:</h3>
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

<?php else: ?>
    <h1>el pedido no existe</h1>
<?php endif;?>