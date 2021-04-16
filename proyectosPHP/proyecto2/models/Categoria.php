<?php

    class Categoria 
    {
        private $id,$nombre, $db;

        public function __construct()
        {
            $this->db= DataBase::connect();
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;
        }

        /**
         * Get the value of db
         */ 
        public function getDb()
        {
                return $this->db;
        }

        /**
         * Set the value of db
         *
         * @return  self
         */ 
        public function setDb($db)
        {
                $this->db = $db;
        }

        public function getAll()
        {
            $query="SELECT * FROM categorias";
            $categorias= $this->db->query($query);

            return $categorias; 
        }

        public function getOne()
        {
            $query="SELECT * FROM categorias
                    WHERE id={$this->id};"
            ;
            $categoria=$this->db->query($query);

            return $categoria->fetch_object();
        }

        public function crear()
        {
            
            $query="INSERT INTO categorias VALUES (NULL,'{$this->getNombre()}');";
            $categoria=$this->db->query($query);

            $crear=false;
            if($categoria){
                $crear=true;
            }

            return $crear;
        }
    }

?>