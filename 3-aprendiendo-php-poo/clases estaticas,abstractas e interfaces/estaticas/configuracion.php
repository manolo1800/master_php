<?php

    class Configuracion
    {
        public static $color,$newsletter,$entorno;

        public static function getcolor()
        {
            return self::$color;
        }
        public static function setcolor($color)
        {
            self::$color=$color;
        }

        
        public static function getentorno()
        {
            return self::$entorno;
        }
        public static function setentorno($entorno)
        {
            self::$entorno=$entorno;
        }

        public static function getnewsletter()
        {
            return self::$newsletter;
        }
        public static function setnewsletter($newsletter)
        {
            self::$newsletter=$newsletter;
        }
        
    }

?>