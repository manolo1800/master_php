<?php

    class Utils
    {
        public static function deleteSession($name)
        {
            if(isset($_SESSION[$name]))
            {
                $_SESSION[$name]=null;
                unset($_SESSION[$name]);

                return $name;
            }    
                
        }

        public static function showCategorias()
        {
            require_once 'models/Categoria.php';
            $categoria= new Categoria();
            $categorias=$categoria->getAll();
            return $categorias;
        }

        public static function saveImage($namecontroller,$FILES)
        {
            
            //GUARDAR IMAGEN
            $file=$FILES;
            $filename= $file['name'];
            $mimetype= $file['type'];

            if($mimetype=="image/jpg" || $mimetype=="image/jpeg" || $mimetype=="image/png" || $mimetype=="image/gif" )
            {
                if(!is_dir("uploads/images/$namecontroller"))
                {
                    mkdir("uploads/images/$namecontroller",0777,true);
                }
                move_uploaded_file($file['tmp_name'],"uploads/images/$namecontroller/".$filename);
                
            }
            return $filename;
            
        }

        public static function statisticsCarritos()
        {
            $stats = array(
                'count' => 0,
                'total' => 0
            );

            if(isset($_SESSION['carrito']))
            {
                $stats['count']=count($_SESSION['carrito']);

                foreach($_SESSION['carrito'] as $valor)
                {
                    $stats['total']+= $valor['unidades']*$valor['precio'];
                }
            }

            return $stats;
        }

        public static function isLogin()
        {
            if(!isset($_SESSION['login']))
            {
                echo "<script>window.alert('inicia sesion o registrate para entrar en esta opcion')</script> ";
                header("location:".base_url);
            }
        }
    }

?>