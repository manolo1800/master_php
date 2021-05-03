<?php
    require_once 'models/Usuario.php';
    
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
                $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellido=isset($_POST['apellido']) ? $_POST['apellido'] : false; 
                $email=isset($_POST['email']) ? $_POST['email'] : false;
                $password=isset($_POST['password']) ? $_POST['password']: false;
                $imagen=Utils::saveImage('usuario',$_FILES['imagen']);
                
                
                //array que contiene los errores introducidos por post
                $errores=array();
                
                $usuario= new Usuario();
                //validar los datos antes de guardarlos en la base de datos
                
                //validar nombre
                if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre))
                {
                    $usuario->setNombre($nombre);
                }else{
                    $nombre_valido=false;
                    $errores['nombre']="verifique si esta correcto el nombre";
                }

                //validar apellidos
                if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido))
                {
                    $usuario->setApellido($apellido);
                }else{
                    $apellido_valido=false;
                    $errores['apellido']="verifique si esta correcto el apellido";
                }
                
                //validar email
                if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL) )
                {
                    $usuario->setEmail($email);
                }else{
                    $email_invalido=false;
                    $errores['email']="el email no es valido";
                }

                //validar password
                if(!empty($password))
                {
                    $usuario->setPassword($password);
                }else{
                    $password_valido=false;
                    $errores['password']="la contraseña es invalida";
                }
                
                if(!empty($imagen))
                {
                    $usuario->setImagen($imagen);
                }else{
                    $imagen_valido=false;
                    $errores['password']="la contraseña es invalida";
                }
            
                
                //guardar datos usuario
                    $guardar_usuario=false;
                
                if(count($errores) == 0)
                {
                    $guardar_usuario=true;

                    
                    $save=$usuario->save();

                    if($save)
                    {
                        $_SESSION['register']="complete";
                    }
                    else
                    {
                        $_SESSION['register']="failed";
                    }
                }
                else
                {
                    $_SESSION['register']="failed";
                }    
            }
            else
            {
                $_SESSION['register']="failed";
            }

            header("location:".base_url."Producto/destacados");
                
        }

        public function login()
        {
            if(isset($_POST))
            {   
                
                $usuario= new Usuario();
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);
                $login=$usuario->login();
                
                
                if($login && is_object($login))
                {
                    $_SESSION['login']=$login;

                    if($login->rol == 'admin' )
                    {
                        $_SESSION['admin']=true;
                    }
                    else
                    {
                        $_SESSION['error_login'] = 'identificacion fallida !!';
                    }
                }
                else
                {
                    $_SESSION['error_login'] = 'identificacion fallida !!';
                }
                
            } 
            header("location:".base_url);       
        }

        public function logout()
        {
            if(isset($_SESSION['login']))
            {
                unset($_SESSION['login']);
            }

            if(isset($_SESSION['admin']))
            {
                unset($_SESSION['admin']);
            }
            
            header("location:".base_url);
        }
    }    
?>