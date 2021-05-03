<?php
    require_once 'ModeloBase.php';

    class Nota extends ModeloBase
    {
        public $id_usuario,$titulo,$contenido;
        
        public function __construct($id_usuario=null,$titulo=null,$contenido=null)
        {
            parent::__construct();
            $this->id_usuario=$id_usuario;
            $this->titulo=$titulo;
            $this->contenido=$contenido;
        } 

        public function getId_usuario()
        {
                return $this->id_usuario;
        }

        public function setId_usuario($id_usuario) :void
        {
                $this->id_usuario = $id_usuario;
        }
        
        public function getTitulo()
        {
                return $this->titulo;
        }
        public function setTitulo($titulo):void
        {
                $this->titulo = $titulo;
        }

         
        public function getContenido()
        {
                return $this->contenido;
        }
        public function setContenido($contenido):void
        {
                $this->contenido = $contenido;
        }
        
        public function guardar()
        {
                $query= "INSERT INTO notas(id_usuario,titulo,contenido,fecha)
                         VALUES ('{$this->id_usuario}','{$this->titulo}', '{$this->contenido}', CURDATE());";
                $guardar= $this->db->query($query);
                
                return $guardar;
        }

         
        
    }
    
    
?>