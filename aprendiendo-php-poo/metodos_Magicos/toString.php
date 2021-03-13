<?php

    class Usuario
    {
        public $nombre,$email;

        public function __construct()
        {
            $this->nombre="manuel cisneros";
            $this->email="manuelredescalcisneros@gmail.com";
        }

        public function __toString()
        {
            return "hola, {$this->nombre} estas registrado con {$this->email}";
        }

    }

    $usuario= new Usuario();

    echo $usuario;

?>