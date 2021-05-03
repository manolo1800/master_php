<?php
    
    class NotaController
    {
        public function listar(){
            //modelo
            require_once 'models/Nota.php';

            //logica accion controlador
            $nota= new Nota();
            $notas=$nota->conseguirtodos('notas');
            
            //vista
            require_once 'views/nota/listar.php';
        }

        public function crear()
        {
            //modelo
            require_once 'models/Nota.php';
            
            //logica accion controlador
            $nota= new Nota();
            
            if(isset($_POST))
            {
                $id_usuario=isset($_POST['id_usuario']) ? mysqli_real_escape_string($nota->db,$_POST['id_usuario']):false;
                $titulo=isset($_POST['titulo']) ? mysqli_real_escape_string($nota->db,$_POST['titulo']):false;
                $contenido=isset($_POST['contenido']) ? mysqli_real_escape_string($nota->db,$_POST['contenido']):false;
            }

            $nota->setId_usuario($id_usuario);
            $nota->setTitulo("$titulo");
            $nota->setContenido("$contenido");

            $guardar=$nota->guardar();

            //vista  
            if($guardar)
            {
                header('location:index.php/?controller=Nota&action=listar');
            }else{
                header('location:views/nota/crear.php');
            }
        }

        public function borrar()
        {

        }
    }

?>