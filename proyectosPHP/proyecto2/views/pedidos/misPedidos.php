<h1>mis pedidos</h1>

<table>
        
     <tr>
         <th>numero de pedido</th>
         <th>coste</th>
         <th>fecha</th>
         
     </tr>     
    <?php while($pedido = $pedidos->fetch_object()): ?>

    
        <tr>
            <td><?=$pedido->id?></td>
            <td><?=$pedido->coste?></td>
            <td><?=$pedido->fecha?></td>
            
            
        </tr>
        
    <?php endwhile;?>
</table>    