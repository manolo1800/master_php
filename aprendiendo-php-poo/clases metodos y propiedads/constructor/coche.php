<?php 
    // programacion orientada a objetos (POO)

    //definir clases

    class Coche
    {
        //atributos o propiedades (variables)
        public $color;
        public $marca;
        public $modelo;
        public $velocidad;
        public $caballaje;
        public $plazas;

        //los metodos son acciones que hacen los objetos
        public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas)
        {
            $this->color=$color;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->velocidad=$velocidad;
            $this->caballaje=$caballaje;
            $this->plazas=$plazas;
        }
        
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
        
        public function getinformacion(Coche $miObjeto)
        {
            if(is_object($miObjeto))
            {
                $informacion="<h1>informacion del coche</h1>";
                $informacion .="Marca: ".$miObjeto->marca . "<br/>";
                $informacion .="Modelo: ".$miObjeto->modelo . "<br/>";
                $informacion .="color: ".$miObjeto->color . "<br/>";
                $informacion .="velocidad: ".$miObjeto->velocidad . "<br/>";
                $informacion .="caballaje: ". $miObjeto->caballaje . "<br/>";
                $informacion .="plazas: ". $miObjeto->plazas;
            }else{
                $informacion="este es su dato". $miObjeto;
            }

            return $informacion;
        }

    }