<?php

    class Usuario
    {
        const URL_COMPLETA="http://localhost";//declaracion de una constante siempre todo en mayuscula  
        public $email,$password;

        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($email)
        {
            $this->email=$email;
        }

        public function getPasswordd()
        {
            return $this->password;
        }
        public function setPassword($password)
        {
            $this->password=$password;
        }
        
    }

    $usuario= new Usuario();
    echo Usuario::URL_COMPLETA . "<br/>";/*<-las constantes se llaman como si fueran una propiedad 
    estatica, no como si fuesen un objeto*/
    
    var_dump($usuario);

?>