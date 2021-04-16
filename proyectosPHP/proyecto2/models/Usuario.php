<?php

    class Usuario
    {
        private $id,$nombre,$apellido,$email,$password,$rol,$imagen,$db;

        public function __construct()
        {
            $this->db= DataBase::connect();
        }
        
        
        public function getId()
        {
                return $this->id;
        }
 
        public function setId($id)
        {
                $this->id = $this->db->real_escape_string($id);
        }
        
        //nombre
        public function getNombre()
        {
                return $this->nombre;
        }
        
        public function setNombre($nombre)
        {
                $this->nombre = $this->db->real_escape_string($nombre);

        }

        

         //apellido
        public function getApellido()
        {
                return  $this->apellido;
        }
        
        public function setApellido($apellido)
        {
                $this->apellido = $this->db->real_escape_string($apellido);
        }


         //email
        public function getEmail()
        {
                return $this->email;
        }
        
        public function setEmail($email)
        {
                $this->email = $this->db->real_escape_string($email);
        }


        //password
        public function getPassword()
        {
                return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT,['cost'=> 04]);
        
        }
        
        public function setPassword($password)
        {
            $this->password = $password;

        }    
        //rol
        public function getRol()
        {
                return  $this->rol;
        }

        public function setRol($rol)
        {
                $this->rol = $this->db->real_escape_string($rol);
        }


        //imagen
        public function getImagen()
        {
                return $this->imagen;
        }

        public function setImagen($imagen)
        {
                $this->imagen = $this->db->real_escape_string($imagen);
        }

        
        public function save()
        {
           
                $query= "INSERT INTO usuarios VALUES
                          (NULL,'{$this->getNombre()}','{$this->getApellido()}', 
                          '{$this->getemail()}', '{$this->getpassword()}','user','{$this->getImagen()}')
                        ;";
                
                $save= $this->db->query($query);
                
                $result=false;
                if($save)
                {
                    $result=true;
                }

                return $result;
       
        }

        public function login()
        {       
                $result=false;
                $email=$this->email;
                $password=$this->password;

                $query="SELECT * FROM usuarios where email= '$email';";

                $login= $this->db->query($query);

                if($login && $login->num_rows == 1)
                {
                        $usuario=$login->fetch_object();

                        $verify=password_verify($password,$usuario->password);

                        if($verify)
                        {
                                $result=$usuario;
                        }
                       return $result; 
                }
        }
        
    }

?>