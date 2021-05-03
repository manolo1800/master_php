<?php
    $host="localhost";
    $user="darking";
    $password="man1800";
    $database="phpmysql";
    
    $conexion=mysqli_connect($host,$user,$password,$database);

    if(mysqli_connect_errno())
    {
        echo "la conexion a la base de datos ha fallado";
    }else{
        echo "la conexion a la base de datos ha sido exitosa";
    } 

    echo "<br> <br>";

    $query=mysqli_query($conexion,"SELECT * FROM notas");

    while($nota=mysqli_fetch_assoc($query))
    {
        echo "<h2>".$nota['titulo']. "</h2>". "<br/>";
        echo $nota['descripcion']. "<br/>";
    }

    
?>