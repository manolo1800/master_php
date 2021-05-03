<?php
    echo "<h3>esto es un bucle while</h3>";
    $numero=0;

    while($numero<=100){

        echo $numero;
        
        if($numero <>100){

            echo ", ";
        }
        
        $numero++;
        
    }

    echo "<hr>";
    echo "<h3>esto es un bucle while</h3>";
    if(isset($_GET['numero'])){

        $numero=$_GET['numero'];

    }else{
        $numero=1;
    }

    echo "<h1>la tabla de multiplicar del numero $numero</h1>";

    $contador=0;

    while($contador<=10){
        
        echo "$numero x $contador =". ($numero*$contador)."<br>";
        $contador++;
    }
    echo "<hr>";
    echo "<h3>esto es un bucle do while</h3>";

    $edad=17;
    $contador=1;

    do {
        echo "tienes acceso al local privado $contador <br>";
        $contador++;
    } while ($edad >= 18 && $contador <= 10);
    echo "<hr>";
    echo "<h3>esto es un bucle for</h3>";
    //bucle for
    $resultado=0;

    for($i=0;$i <= 100;$i++){

        $resultado=$resultado+$i;
    }

    echo "el resultado es: $resultado";
?>