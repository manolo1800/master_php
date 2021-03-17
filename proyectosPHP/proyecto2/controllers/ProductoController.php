<?php
    
    class ProductoController
    {
        public function index()
        {
            echo "Producto index";
        }

        public function destacados()
        {
            require_once 'views/producto/destacados.php';
        }
    }

?>