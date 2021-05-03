<?php
    $num1=2;
    $num2=3;

    echo "suma ".($num1+$num2)."<br>";
    echo "Resta ".($num1-$num2)."<br>";
    echo "Multiplicacion ".($num1*$num2)."<br>";
    echo "Division ".($num1/$num2)."<br>";
    echo "modulo ".($num1%$num2)."<br>";

    //incremento y demcremento

    $year=2020;

    //incremento 
    $year++;
    echo "incremento ".$year."<br>";

    //decremento
    $year--; $year--;
    echo "decremento ".$year."<br>";

    //operadores de asignacion 

    $edad=20;
    echo $edad."<br>";
    echo ($edad*=5);
?>