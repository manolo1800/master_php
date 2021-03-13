<?php

    function app_autoloader($class)
    {
        require_once 'clases/' . strtolower($class) . '.php';
    }
   spl_autoload_register('app_autoloader')

?>