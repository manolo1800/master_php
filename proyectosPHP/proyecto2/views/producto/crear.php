<h1>Crear producto</h1>


<form method="POST" action="<?=base_url?>Producto/save" enctype="multipart/form-data">
    
    
    <select name="categoria_id">
        <?php
            $categorias=Utils::showCategorias();
            while($cat=$categorias->fetch_object()): 
        ?>
            <option value="<?=$cat->id?>"><?=$cat->nombre;?></option>
            
        <?php endwhile; ?>
    </select>

    <label for="nombre">nombre</label>
    <input type="text" name="nombre" />

    <label for="descripcion">descripcion</label>
    <textarea name="descripcion" rows="8"></textarea>

    <label for="precio">precio</label>
    <input type="text" name="precio" value="00.00"/>

    <label for="stock">stock</label>
    <input type="number" name="stock"/>

    <label for="oferta">oferta</label>
    <input type="number" name="oferta">

    <label for="imagen">imagen</label>
    <input type="file" name="imagen" />

    <input type="submit" value="crear">

</form>