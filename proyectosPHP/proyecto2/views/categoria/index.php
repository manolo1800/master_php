<h1>Gestionar Categorias</h1>

<a href="<?=base_url;?>Categoria/crear" class="button button-small">Crear categoria</a>

<table>
     <tr>
        <th>id</th>
        <th>nombre</th>
    </tr>
    <?php while($cat=$categorias->fetch_object()): ?>
        <tr>
            <td><?=$cat->id;?></td>
            <td><?=$cat->nombre;?></td>
        </tr>
    <?php endwhile; ?>
</table>