<?php
    
    require_once 'models/Pedido.php';

    class PedidoController
    {
        public function index()
        {   
            $pedido= new Pedido();
            $pedidos=$pedido->mostrar();
            require_once 'views/pedidos/index.php';
        }

        public function hacer()
        {
            require_once 'views/pedidos/hacer.php';
        }

        public function add()
        {
            
            if(isset($_POST))
            {
                //Update stock
                foreach($_SESSION['carrito'] as $indice => $elemento)
                {   
                    $stock= new Pedido();
                    $prod=$elemento['producto'];
                    
                    $cantidad=$elemento['unidades'];
                    $id=$prod->id;
                    $stock->restStock($cantidad,$id);
                }

                $usuario_id=$_SESSION['login']->id;
                $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
                $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
                $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
                $coste = Utils::statisticsCarritos()['total'];
                $estado = "confirm";

                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);
                $pedido->setEstado($estado);
                $save=$pedido->guardarPedido();

                
                

                //GUARDAR LINEA PEDIDO
                $pedido->linea_save();

                if($save)
                {
                    
                    $_SESSION['pedido']="true";
                    Utils::deleteSession('carrito'); 
                }
                else
                {
                    $_SESSION['pedido']="false";
                }
                header("location:".base_url."Pedido/confirmado");    
               
                

            }else
            {
                header("location:".base_url);
            }
            
        }
        
        public function confirmado()
        {
            if(isset($_SESSION['login']))
            {
                $usuario_id = $_SESSION['login']->id;
                
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido=$pedido->getOne_usuario_id();
                
                
                $productos_pedidos= new Pedido();
                $productos = $productos_pedidos->getProductosByPedidos($pedido->id);
                
                
            }
            require_once 'views/pedidos/confirmado.php';
        }
        public function misPedidos()
        {
            $usuario_id=$_SESSION['login']->id;
            
            $pedido= new Pedido();
            $pedido->setUsuario_id($usuario_id);
            $pedidos=$pedido->getByUser();

            require_once 'views/pedidos/misPedidos.php';
        }

        public function detalle()
        {
            if(isset($_GET))
            {
                $id=$_GET['id'];

                $pedido= new Pedido();
                $pedido->setId($id);
                $pedido=$pedido->getOne();

                $productos_pedidos= new Pedido();
                $productos = $productos_pedidos->getProductosByPedidos($id);

                require_once 'views/pedidos/detalle.php';
            }
        }

        public function cambiarEstado()
        {
            if(isset($_POST))
            {
                $esta=$_POST['estado'];
                $id=$_GET['id'];

                $estado= new Pedido();
                $estado->setId($id);
                $estado->setEstado($esta);
                $estado->cambiarEstado();

            }
            header("location:".base_url."Pedido/index");
        }
    }

?>