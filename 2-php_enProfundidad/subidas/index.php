<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subidas al servidor</title>
</head>
<body>
    <h1>subir archivos</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="enviar">
    </form>
    <?php
        $gestor=opendir('./images');
        if($gestor):
            
            while(($image=readdir($gestor))!==false):
                if($image != '.' && $image != '..'):
                    echo "<br/><img src='images/$image' width='200px'/><br/>";
                endif;
            endwhile;        
        endif;
    ?>  
</body>
</html>