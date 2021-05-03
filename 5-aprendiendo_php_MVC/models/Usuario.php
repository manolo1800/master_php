<?php
    require_once 'ModeloBase.php';

    class Usuario extends ModeloBase
    {
        public $nombre,$apellido,$email,$password;

        public function __construct()
        {
            parent::__construct();
            $this->nombre;
            $this->apellido;
            $this->email;
            $this->password;
        }

        function getNombre() {
            return $this->nombre;
        }

        function getApellido() {
            return $this->apellido;
        }

        function getEmail() {
            return $this->email;
        }

        function getPassword() {
            return $this->password;
        }

        function setNombre($nombre): void {  // el void sirve para indicar que el motodo no retorna valores 
            $this->nombre = $nombre;
        }

        function setApellido($apellido): void {
            $this->apellido = $apellido;
        }

        function setEmail($email): void {
            $this->email = $email;
        }

        function setPassword($password): void {
            $this->password = $password;
        }

        public function guardar()
        {
                $query= "INSERT INTO usuarios(nombre,apellido,email,`password`,fecha)
                         VALUES ('{$this->nombre}','{$this->apellido}', '{$this->email}', '{$this->password}', CURDATE());";
                $guardar= $this->db->query($query);
                
                return $guardar;
        }
        
    }

?>