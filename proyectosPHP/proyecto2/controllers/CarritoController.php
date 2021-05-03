<?php
    require_once 'models/Producto.php';

    class CarritoController
    {
        public function index()
        {
            if(isset($_SESSION['carrito']))
            {    
                $carrito=$_SESSION['carrito'];
            }
            require_once 'views/carrito/index.php';
            
        }

        public function add()
        {
            if(isset($_GET['id']))
            {
                $producto_id=$_GET['id'];
            }
            else
            {
                header("location:". base_url);
            }
            if(isset($_SESSION['carrito']))
            {
                foreach($_SESSION['carrito'] as $indice => $elementos)
                {
                    $counter=0;
                    if($elementos['id_producto']==$producto_id)
                    {
                        $_SESSION['carrito'][$indice]['unidades']++;
                        $counter++;
                    }
                }
            }
            
            if(!isset($counter) || $counter==0)
            {    
                $producto= new Producto();
                $producto->setId($producto_id);
                $producto=$producto->getProduct();

                if(is_object($producto))
                {
                    $_SESSION['carrito'] []= array(
                        "id_producto" => $producto->id,
                        "precio" => $producto->precio,
                        "unidades" => 1,
                        "producto" => $producto
                    );
                } 
            }
            header("location:".base_url);
        }


        public function remove()
        {
            if(isset($_SESSION['carrito']) && $_GET)
            {
                $indice=$_GET['indice'];
                unset($_SESSION['carrito'][$indice]);
            }
            header("location:".base_url."Carrito/index");
        }

        public function delete_all()
        {
            if(isset($_SESSION['carrito']))
            {
                unset($_SESSION['carrito']);
            }
            header("location:".base_url);
        }

        public function sum()
        {
            if(isset($_SESSION['carrito']) && $_GET)
            {
                
                $indice=$_GET['indice'];
                
                $_SESSION['carrito'][$indice]['unidades']++;


            }
            header("location:".base_url."Carrito/index");
        }

        public function rest()
        {
            if(isset($_SESSION['carrito']) && $_GET)
            {
                $indice=$_GET['indice'];
                if($_SESSION['carrito'][$indice]['unidades'] > 0)
                {
                    $_SESSION['carrito'][$indice]['unidades']--;
                    if($_SESSION['carrito'][$indice]['unidades'] == 0)
                    {
                        unset($_SESSION['carrito'][$indice]);
                    }
                }
                
                
            }
            header("location:".base_url."Carrito/index");
        }
    }
?>