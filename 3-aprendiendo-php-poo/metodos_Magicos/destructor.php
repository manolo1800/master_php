<?php

    class Usuario 
    {
        public $nombre,$email;
        public function __construct()
        {
            echo "creando el objeto <br/>";
        }
        public function __destruct()
        {
            echo "destruyendo el objeto";
        }
    }

    $usuario= new Usuario();

    for ($i=0;$i<=100;$i++)
    {
        echo $i . "%<br/>";
    }
    
?>