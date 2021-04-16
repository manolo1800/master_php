<h1>Crear Categoria</h1>

<?php if(isset($_SESSION['create']) && $_SESSION['create']=="complete" ): ?>
    <strong class="alert_green">creacion exitosa</strong>

<?php elseif(isset($_SESSION['create']) && $_SESSION['create']=="failed"):?>
    <strong class="alert_red">creacion fallida</strong>
   
<?php endif; ?>

<?php  Utils::deleteSession('create');  ?>

<form method="POST" action="<?=base_url?>Categoria/nuevaCategoria">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" required>
    <input type="submit" value="crear">
</form>