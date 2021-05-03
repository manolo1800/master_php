<?php

    trait Utilidades
    {
        public function mostrarNombre()
        {
            return "<h1> el nombre es ". $this->nombre . "</h1>";
        }
    }

    class Coche
    {
        public $nombre,$marca;

        public function __construct($nombre=null,$marca=null)
        {
            $this->nombre=$nombre;
            $this->marca=$marca;
        }
        
        public function getmarca()
        {
            return $this->marca;
        }
        public function setmarca($marca)
        {
            $this->marca=$marca;
        }

        use Utilidades;

    }
    
    class Persona
    {
        public $nombre,$apellido;

        public function __construct($nombre,$apellido)
        {
            $this->nombre=$nombre;
            $this->apellido=$apellido;
        }

        public function getapellido()
        {
            return $this->apellido;
        }
        public function setapellido($apellido)
        {
            $this->apellido=$apellido;
        }

        use Utilidades;
    }

    $coche= new Coche("testarrosa","Ferrari");
    $persona= new Persona("manuel","cisneros");

    echo $coche->mostrarNombre();
    echo $persona->mostrarNombre();

?>