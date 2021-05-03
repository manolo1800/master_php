<?php

    require_once 'clases.php';

    $persona= new Persona("manuel","cisneros",1.75,20);

    var_dump($persona);
    echo "<br/><br/>";

    $informatico= new Informatico();

    $informatico->setnombre("victor");

    var_dump($informatico);

    echo "<br/><br/>";

    $auditorRedes= new TecnicoRedes();
    
    var_dump($auditorRedes);

   

?>