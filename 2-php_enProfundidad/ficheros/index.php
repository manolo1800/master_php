<?php
    //abrir archivo
    $archivo= fopen("text_prueba.txt",'a+');
    /*
    //leer contenido
    while(!feof($archivo))
    {
        $contenido=fgets($archivo);
        echo $contenido . "<br/>";
    };
    
    //escribir
    fwrite($archivo, "<br>soy tu ano jajajjaj xd");
    
    //cerrar archivo
    fclose($archivo);

    //copiar
    copy('text_prueba.txt','fichero_copiado.txt') or die('error al copiar');
    
    //renombrar
    rename('fichero_copiado.txt','ficherito_recopiadito.txt');
    
    //borrar
    unlink('ficherito_recopiadito.txt') or die('error al borrar');
    */

    if(file_exists('text_prueba.txt'))
    {
        echo "el archivo existe";
    }else{
        echo "el archivo no existe";
    }
?>