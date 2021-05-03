<?php

    function app_autoloader($classname)
    {
        include 'controllers/'.$classname.'.php';
    }
    spl_autoload_register('app_autoloader');
?>