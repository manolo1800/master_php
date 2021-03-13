<?php
    $peliculas=array('batman','spiderman','ironman');
    $cantantes=['2pack','50cent','snoop dogg','drake'];
    var_dump($peliculas);
    echo "<br>";    
    
    echo "<ul>";
    for($i=0;$i < count($peliculas);$i++){
        echo "<li>" .$peliculas[$i]."</li>";
    }
    echo "</ul>";
    echo "<br>"; 
    echo "<ol>";
    foreach($cantantes as $cantante){
        echo "<li>".$cantante. "</li>";
    }
    echo "<ol>";
    echo "<br>";
    $personas=[
        'nombre'=>'manuel',
        'apellido'=>'cisneros'
    ];
    echo $personas['apellido'];
    echo "<br>";

    $contactos=[
        array(
            'nombre'=> 'manuel',
            'apellido'=> 'cisneros'
        ),         
        array(
            'nombre' => 'norman',
            'apellido' => 'vera'
        )   
    ];
    echo $contacto[0]['nombre'];
    echo "<br>";
    foreach($contactos as $contacto){
        var_dump($contacto)."<br>";
    };
?>