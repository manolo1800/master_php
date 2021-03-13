<?php

    class Persona
    {
        private $nombre,$edad,$ciudad;

        public function __construct($nombre=null,$edad=null,$ciudad=null)
        {
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->ciudad=$ciudad;
        }

        public function __call($name, $arguments)
        {
            $prefix_metodo=substr($name,0,3);

            if($prefix_metodo == 'get')
            {
                $nombre_metodo=substr(strtolower($name),3);
                
                if(!isset($this->$nombre_metodo))
                {
                    return "El metodo que estas invocando no existe";
                }
                return $this->$nombre_metodo."<br/>";
            }else{
                return "El metodo que estas invocando no existe";
            }
        }
    }

    $persona= new Persona("manuel",20,"caracas");

    echo $persona->getnombre();
    echo $persona->getedad();
    echo $persona->getciudad();

?>