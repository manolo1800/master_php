<h1>editar producto</h1>


<form action="<?=base_url?>Producto/update" method="POST" enctype="multipart/form-data" >
    
    
    <?php $prod=$productos?>
    
    <select name="categoria_id">
        <?php
            $categorias=Utils::showCategorias();
            while($cat=$categorias->fetch_object()): 
        ?>
            <option value="<?=$cat->id?>"><?=$cat->nombre;?></option>
            
        <?php endwhile; ?>
    </select>
    
    <input type="hidden" name="id" value="<?=$prod->id?>" >
    
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" value="<?=$prod->nombre?>" />

    <label for="descripcion">descripcion</label>
    <textarea name="descripcion" rows="8"><?=$prod->descripcion?></textarea>

    <label for="precio">precio</label>
    <input type="text" name="precio" value="<?=$prod->precio?>"/>

    <label for="stock">stock</label>
    <input type="number" name="stock" value="<?=$prod->stock?>"/>

    <label for="oferta">oferta</label>
    <input type="number" name="oferta" value="<?=$prod->oferta?>">
    
    <label for="imagen">imagen</label>
    
    <?php if(isset($prod) && is_object($prod) && !empty($prod->imagen)): ?>
        <img src="<?=base_url?>uploads/images/producto/<?=$prod->imagen?>" class="thumb"/>
    <?php endif; ?>    
    
    <input type="file" name="imagen"/>

    <input type="submit" value="editar">
</form>