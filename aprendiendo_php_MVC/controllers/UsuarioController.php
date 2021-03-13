<?php

class UsuarioController
{
    public function MostrarTodos()
    {   
        //modelo
        require_once 'models/Usuario.php';

        //logica del controlador
        $usuario= new Usuario();
        $todos_los_usuarios=$usuario->conseguirtodos('usuarios');

        //vista
        require_once 'views/usuario/mostrar_todos.php';

    }

    public function Crear()
    {
        //modelo
        require_once 'models/Usuario.php';

        //logica accion controlador
        $usuario= new Usuario();
        
        if(isset($_POST))
        {
            $nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($usuario->db,$_POST['nombre']):false;
            $apellido=isset($_POST['apellido']) ? mysqli_real_escape_string($usuario->db,$_POST['apellido']):false;
            $email=isset($_POST['email']) ? mysqli_real_escape_string($usuario->db,$_POST['email']):false;
            $password=isset($_POST['password']) ? mysqli_real_escape_string($usuario->db,$_POST['password']):false;
        }

        $usuario->setNombre     ("$nombre");
        $usuario->setApellido   ("$apellido");
        $usuario->setEmail      ("$email");
        $usuario->setPassword   ("$password");

        $guardar=$usuario->guardar();

        //vista  
        if($guardar)
        {
            header('location:index.php/?controller=Usuario&action=MostrarTodos');
        }else{
            header('location:views/usuario/crear.php');
        }
    }
    
}



?>