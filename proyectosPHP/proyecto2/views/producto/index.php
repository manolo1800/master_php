<h1>Gestion de productos</h1>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete']=="complete" ): ?>
    <script>window.alert('eliminacion exitosa')</script> 

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete']=="failed"):?>
    <script>window.alert('eliminacion fallida')</script> 
   
<?php endif; ?>

<?php if(isset($_SESSION['editar']) && $_SESSION['editar']=="complete" ): ?>
    <script>window.alert('edicion exitosa')</script> 
<?php elseif(isset($_SESSION['editar']) && $_SESSION['editar']=="failed"):?>
    <script>window.alert('!ups el producto no se ha podido editar')</script> 
<?php endif; ?>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto']=="complete" ): ?>
    <script>window.alert('!el producto se ha creado con exito')</script>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto']=="failed"):?>
    <script>window.alert('!ups el producto no se ha podido crear')</script>
<?php endif; ?>



<?php  Utils::deleteSession('producto');  ?>

<?php  Utils::deleteSession('editar');  ?>

<?php  Utils::deleteSession('delete');  ?>



<a href="<?=base_url;?>Producto/crear" class="button button-small">Crear producto</a>

<table>
     <tr>
        <th>id</th>
        <th>categoria_id</th>
        <th>nombre</th>
        <th>descripcion</th>
        <th>precio</th>
        <th>stock</th>
        <th>oferta</th>
        <th>acciones</th>
    </tr>
    <?php while($prod=$productos->fetch_object()): ?>
        <tr>
            <td><?=$prod->id;?></td>
            <td><?=$prod->categoria_id;?></td>            
            <td><?=$prod->nombre;?></td>
            <td><?=$prod->descripcion;?></td>
            <td>$<?=$prod->precio;?></td>
            <td><?=$prod->stock;?></td>
            <td><?=$prod->oferta;?>%</td>
            <td>
                <a href="<?=base_url;?>Producto/editar&id=<?=$prod->id?>" class="button">editar</a>
                <a href="<?=base_url;?>Producto/eliminar&id=<?=$prod->id?>" class="button button-delete">eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>