<?php

    class Pc 
    {
        private $software,$hardware;

        public function __construct($software=null,$hardware=null)
        {
            $this->software=$software;
            $this->hardware=$hardware;
        }

        public function Informacion()
        {
            $informacion= 
            __CLASS__ . "<br/>".
            __METHOD__ . "<br/>".
            __FILE__ . "<br/>";

            return $informacion;
        }


    }

    $pc= new Pc("linux","DELL OPTIPLEX-790");
    
    echo $pc->Informacion();

?>