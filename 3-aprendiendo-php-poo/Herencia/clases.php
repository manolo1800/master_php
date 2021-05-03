<?php

    class Persona
    {
        public $nombre,$apellido,$altura,$edad;

        public function __construct($nombre=null,$apellido=null,$altura=null,$edad=null)
        {
            
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->altura=$altura;
            $this->edad=$edad;
        }

        public function getnombre()
        {
            return $this->nombre;
        }
        public function setnombre($nombre)
        {
            $this->nombre=$nombre;
        }


        public function getapellido()
        {
            return $this->apellido;
        }
        public function setapellido($apellido)
        {
            $this->apellido=$apellido;
        }


        public function getaltura()
        {
            return $this->altura;
        }
        public function setaltura($altura)
        {
            $this->altura=$altura;
        }


        public function getedad()
        {
            return $this->edad;
        }
        public function setedad($edad)
        {
            $this->edad=$edad;
        }

        public function hablar()
        {
            return "holi";
        }

        public function caminar()
        {
            return "caminando";
        }

        public function respirar()
        {
            return "inhalar y exahalar";
        }
    }

    class Informatico extends Persona
    {
        public $lenguaje,$experienciaProgramando;

        public function __construct()
        {
            $this->lenguaje="php, mysql, js, html, css";
            $this->experienciaProgramando=1;
        }

        public function programar()
        {
            return "progamando";
        }

        public function repararPc()
        {
            return "repando pc";
        }
    }

    class TecnicoRedes extends Informatico
    {
        public $auditarRed,$experienciaRedes;
        
        public function __construct()
        {
            parent :: __construct();
            $this->auditarRed="experto";
            $this->experienciaRedes=5;
        }

        public function auditoria()
        {
            return "haciendo auditoria";
        }
    }

?>