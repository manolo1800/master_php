<h1>eliminar producto</h1>

<?php $prod=$productos?>

<table>
     <tr>
        <th>id</th>
        <th>categoria_id</th>
        <th>nombre</th>
        <th>descripcion</th>
        <th>precio</th>
        <th>stock</th>
        <th>oferta</th>
        
    </tr>
    
    <tr>
        <td><?=$prod->id;?></td>
        <td><?=$prod->categoria_id;?></td>            
        <td><?=$prod->nombre;?></td>
        <td><?=$prod->descripcion;?></td>
        <td>$<?=$prod->precio;?></td>
        <td><?=$prod->stock;?></td>
        <td><?=$prod->oferta;?>%</td>
        
    </tr>
</table>        

<form method="POST" action="<?=base_url?>Producto/delete">
    <input type="hidden" name="id" value="<?=$prod->id;?>"/>
    <input type="submit" value="eliminar" class="button button-delete">
</form>