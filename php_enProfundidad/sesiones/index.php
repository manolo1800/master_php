<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        session_start();

        $var1="esto es una variable local";
        $_SESSION['var2']="esto es una variable de sesion";
        
        echo $var1 . "<br>";
        echo  $_SESSION['var2'];
        
        
    ?>

</body>
</html>