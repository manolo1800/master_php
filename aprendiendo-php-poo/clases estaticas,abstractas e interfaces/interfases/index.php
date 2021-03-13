<?php

    interface Ordenador
    {
        public function encender();
        public function apagar();
        public function reiniciar();
    }
    class Imac implements Ordenador
    {
        public $modelo;

        public function getmodelo()
        {
            return $this->modelo;
        }
        public function setmodelo($modelo)
        {
            $this->modelo=$modelo;
        }
        
        public function encender()
        {
            return "encendiendo";
        }

        public function apagar()
        {
            return "apagando";
        }

        public function reiniciar()
        {
            return "reiniciando";
        }

    }

    $maquintosh= new Imac();
    $maquintosh->setmodelo("macbook M1 PRO");
    echo $maquintosh->getmodelo();

?>