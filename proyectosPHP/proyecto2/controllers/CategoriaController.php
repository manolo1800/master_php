<?php
    require_once 'models/Categoria.php';

    class CategoriaController
    {
        public function index()
        {
            $categoria= new Categoria();
            $categorias=$categoria->getAll();
            require_once "views/categoria/index.php";
        }

        public function crear()
        {
            require_once 'views/categoria/crear.php';
        }

        public function nuevaCategoria()
        {
            $categoria= new Categoria();
            if(isset($_POST))
            {
                $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : false;
                
                $categoria->setNombre($nombre);
                $crear=$categoria->crear();

                if($crear)
                {
                    $_SESSION['create']="complete";
                }else{
                    $_SESSION['create']="failed";
                }
            }else{
                $_SESSION['create']="failed";
            }

            header("location:".base_url."Categoria/crear");
        }

        public function ver()
        {
            if(isset($_GET['id']))
            {   
                $id=$_GET['id'];
                
                $categoria= new Categoria();
                $categoria->setId($id);
                $categoria=$categoria->getOne($id);

                require_once 'models/Producto.php';
                $producto= new Producto();
                $productos= $producto->prodCategoria($id);

                require_once 'views/producto/categoria.php';
            }
            
            
        }
        

    }

?>