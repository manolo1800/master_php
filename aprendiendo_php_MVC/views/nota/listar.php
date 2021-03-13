

<h1>lista de notas</h1>
<?php while($nota=$notas->fetch_object()):?>
    <?=$nota->titulo?> <?=$nota->fecha?> <br/>
<?php endwhile; ?>