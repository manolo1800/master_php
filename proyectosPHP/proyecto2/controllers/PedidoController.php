<?php
    
    require_once 'models/Pedido.php';

    class PedidoController
    {
        public function index()
        {   
            $pedido= new Pedidio();
            $pedidos=$pedido->mostrar();
            require_once 'views/pedidos/index.php';
        }
    }

?>