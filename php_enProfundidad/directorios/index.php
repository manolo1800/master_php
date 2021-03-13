<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    //crear 
    if(!is_dir('mi_carpeta'))
    {
        mkdir('mi_carpeta',0777) or die('no se ha podido crear');
    }else{
        echo "ya existe";
    }
    echo"<hr>";
    // crear archivos para ejemplo 
    if(!file_exists('pagina1.php'))
    {
        fopen('pagina1.php','c+') or die ('error al crear archivo');
    }else{
        echo "ya existe<br>" ;
    };
    if(!file_exists('pagina2.php'))
    {
        fopen('pagina2.php','c+') or die ('error al crear archivo');
    }else{
        echo "ya existe";
    }
    //recorrer carpeta 
    if($gestor=opendir('./mi_carpeta'))
    {
        while(false !== ($archivo=readdir($gestor)))
        {
            if($archivo != '.' && $archivo != '..')
            {
                echo $archivo . "<br>";
            }
        }
    }
    
    //borrar
    rmdir('./mi_carpeta');

?>
</body>
</html>