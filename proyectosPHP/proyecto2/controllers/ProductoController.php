<?php
    require_once 'models/Producto.php';
    class ProductoController
    {
        public function index()
        {
            $producto= new Producto();
            $productos=$producto->getAll();
            require_once 'views/producto/index.php';
        }

        public function destacados()
        {
            $producto= new Producto();
            $productos= $producto->getRandom(6);
            require_once 'views/producto/destacados.php';
        }



        public function crear()
        {
            require_once 'views/producto/crear.php';
        }
        public function save()
        {
            
            if(isset($_POST))
            {
                $categoria_id= isset($_POST['categoria_id']) ? $_POST['categoria_id'] : false;
                $nombre= isset($_POST['nombre']) ? $_POST['nombre'] :false;
                $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                $precio=isset($_POST['precio']) ? $_POST['precio'] : false;
                $stock=isset($_POST['stock']) ? $_POST['stock'] : false;
                $oferta=isset($_POST['oferta']) ? $_POST['oferta'] : false;
                $imagen=Utils::saveImage('producto',$_FILES['imagen']);
                
                
                if(!empty($categoria_id) && !empty($nombre) && !empty($descripcion) && !empty($precio) && !empty($stock) && !empty($imagen))
                {   
                    $producto= new Producto();
                    $producto->setCategoria_id($categoria_id);
                    $producto->setNombre($nombre);
                    $producto->setDescripcion($descripcion);
                    $producto->setPrecio($precio);
                    $producto->setStock($stock);
                    $producto->setOferta($oferta);
                    $producto->setImagen($imagen);
                    $save=$producto->save();
                    
                    if($save)
                    {
                        $_SESSION['producto']="complete";
                    }
                    else
                    {
                        $_SESSION['producto']="failed";
                    }
                }
                else
                {
                    $_SESSION['producto']="failed";
                }
            }
            header("location:".base_url."Producto/index");
        }


        public function editar()
        {
            $producto=new Producto;
            $productos=$producto->getProduct($_GET['id']);
            require_once 'views/producto/editar.php';
        }

        public function update()
        {
            if(isset($_POST))
            {
                $id=isset($_POST['id']) ? $_POST['id'] : false;
                $categoria_id= isset($_POST['categoria_id']) ? $_POST['categoria_id'] : false;
                $nombre= isset($_POST['nombre']) ? $_POST['nombre'] :false;
                $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                $precio=isset($_POST['precio']) ? $_POST['precio'] : false;
                $stock=isset($_POST['stock']) ? $_POST['stock'] : false;
                $oferta=isset($_POST['oferta']) ? $_POST['oferta'] : false;

                if(isset($_FILES['imagen']))
                {
                    $imagen=Utils::saveImage('producto',$_FILES['imagen']);
                }
                
                $producto= new Producto();
                $producto->setId($id);
                $producto->setCategoria_id($categoria_id);
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setOferta($oferta);
                $producto->setImagen($imagen);
                $save=$producto->update();
                    
                if($save)
                {
                    $_SESSION['editar']="complete";
                }
                else
                {
                    $_SESSION['editar']="failed";
                }
            }    
            else
            {
                $_SESSION['editar']="failed";
            }
            
            header("location:".base_url."Producto/index");
        }


        public function eliminar()
        {
            $producto=new Producto;
            $productos=$producto->getProduct($_GET['id']);
            require_once 'views/producto/eliminar.php';
        }

        public function delete()
        {
            if(isset($_POST))
            {
                
                $id=isset($_POST['id']) ?  $_POST['id'] :false;
                
                $producto= new Producto();
                $producto->setId($id);
                $delete=$producto->delete();

                if($delete)
                {
                    $_SESSION['delete']="complete";
                }
                else
                {
                    $_SESSION['delete']="failed";
                }
            } 
            else
            {
                $_SESSION['delete']="failed";
            }
            header("location:".base_url."Producto/index");   
        }

        public function mostrar()
        {
            
             $producto=new Producto;
             $producto->setId($_GET['id']);
             $productos=$producto->getProduct();

             require_once 'views/producto/mostrar.php';
            
        }

    }

?>