<?php 
    // programacion orientada a objetos (POO)

    //definir clases

    class Coche
    {
        //atributos o propiedades (variables)
        public $color="rojo";
        public $marca="ferrari";
        public $modelo="testarossa";
        public $velocidad=250;
        public $caballaje=800;
        public $plazas=2;

        
        //los metodos son acciones que hacen los objetos
        public function getcolor()
        {
            //buscar en esta  clase la propiedad x 
            return $this->color;
        }
        public function setcolor($color)
        {
            $this->color=$color;
        }

        public function getmarca()
        {
            //buscar en esta  clase la propiedad x 
            return $this->marca;
        }
        public function setmarca($marca)
        {
            $this->marca=$marca;
        }

        public function getmodelo()
        {
            //buscar en esta  clase la propiedad x 
            return $this->modelo;
        }
        public function setmodelo($modelo)
        {
            $this->modelo=$modelo;
        }

        public function getvelocidad()
        {
            //buscar en esta  clase la propiedad x 
            return $this->velocidad;
        }
        public function setvelocidad($velocidad)
        {
            $this->velocidad=$velocidad;
        }

        public function getcaballaje()
        {
            //buscar en esta  clase la propiedad x 
            return $this->caballaje;
        }
        public function setcaballaje($caballaje)
        {
            $this->caballaje=$caballaje;
        }

        public function acelerar()
        {
            $this->velocidad++;
        }

        public function frenar()
        {
            $this->velocidad--;
        }

    }

    $coche= new Coche();
    $coche->setcolor("amarillo");

    var_dump($coche);
    
?>