<h1>Gestion de Pedidos</h1>

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


<?php  Utils::deleteSession('editar');  ?>

<?php  Utils::deleteSession('delete');  ?>





<table>
     <tr>
        <th>id</th>
        <th>usuario_id</th>
        <th>provincia</th>
        <th>localidad</th>
        <th>direccion</th>
        <th>coste</th>
        <th>estado</th>
        <th>acciones</th>
    </tr>
    <?php while($ped=$pedidos->fetch_object()): ?>
        <tr>
            <td><?=$ped->id;?></td>
            <td><?=$ped->usuario_id;?></td>            
            <td><?=$ped->provincia;?></td>
            <td><?=$ped->localidad;?></td>
            <td><?=$ped->direccion;?></td>
            <td>$<?=$ped->coste;?></td>
            <td><?=$ped->estado;?></td>
            <td>
                <a href="<?=base_url;?>Pedido/editar&id=<?=$ped->id?>" class="button">editar</a>
                <a href="<?=base_url;?>Pedido/eliminar&id=<?=$ped->id?>" class="button button-delete">eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>