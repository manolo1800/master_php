

<?php while($usuario=$todos_los_usuarios->fetch_object()):?>
    <?=$usuario->nombre?> <?=$usuario->fecha?> <br/>
<?php endwhile; ?>