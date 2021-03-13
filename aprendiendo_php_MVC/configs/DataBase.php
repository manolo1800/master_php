<?php

    class DataBase
    {
        public static function Conecting()
        {
            $conect= new mysqli("localhost","root","","MVC");
            $conect->query("SET NAMES 'utf8'");

            return $conect;
        }
    }

?>