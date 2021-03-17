<?php
    
    class UsuarioController
    {
        public function index()
        {
            echo "usuario index";
        }

        public function registro()
        {
            require_once 'views/usuario/registro.php';
        }

        public function save()
        {
            if(isset($_POST))
            {
                /*$nombre= isset($_POST['nombre']) ? mysqli_real_escape_string($db,trim($_POST['nombre'])) : false;
                $apellido=isset($_POST['apellido']) ? mysqli_real_escape_string($db,trim($_POST['apellido'])) : false; 
                $email=isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
                $password=isset($_POST['password']) ? mysqli_real_escape_string($db,trim($_POST['password'])): false;
                */

                var_dump($_POST);
            }
        }
    }

?>