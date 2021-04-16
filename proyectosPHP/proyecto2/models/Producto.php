<?php

    class Producto
    {
        private $id,$categoria_id,$nombre,$descripcion,$precio,$stock,$oferta,$fecha,$imagen,$db;

        public function __construct()
        {
            $this->db=DataBase::connect();
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
                $this->id = $this->db->real_escape_string($id);
        }
        

        /**
         * Get the value of categoria_id
         */ 
        public function getCategoria_id()
        {
                return $this->categoria_id;
        }

        /**
         * Set the value of categoria_id
         *
         * @return  self
         */ 
        public function setCategoria_id($categoria_id)
        {
                $this->categoria_id = $this->db->real_escape_string($categoria_id);
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
                $this->nombre = $this->db->real_escape_string($nombre);
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $this->db->real_escape_string($descripcion);
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $this->db->real_escape_string($precio);
        }

         /**
         * Get the value of stock
         */ 
        public function getStock()
        {
                return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */ 
        public function setStock($stock)
        {
                $this->stock = $this->db->real_escape_string($stock);
        }

        /**
         * Get the value of oferta
         */ 
        public function getOferta()
        {
                return $this->oferta;
        }

        /**
         * Set the value of oferta
         *
         * @return  self
         */ 
        public function setOferta($oferta)
        {
                $this->oferta = $this->db->real_escape_string($oferta);
        }


        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $this->db->real_escape_string($fecha);
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $this->db->real_escape_string($imagen);
        }

        public function getAll()
        {
            $query="SELECT * FROM productos";
            $productos=$this->db->query($query);

            return $productos;
        }
        
        public function getProduct($id)
        {
                $query="SELECT * FROM productos where id=$id";
                $productos=$this->db->query($query);
                return $productos->fetch_object();
        }

        public function save()
        { 
            $query="INSERT INTO productos VALUES
                    (null, {$this->getCategoria_id()}, '{$this->getNombre()}', '{$this->getDescripcion()}',
                    {$this->getPrecio()}, {$this->getStock()}, {$this->getOferta()}, CURDATE(), '{$this->getImagen()}')
                ;";
             
            

            $save=$this->db->query($query);
            
            $result=false;
            if($save)
            {
                $result=true;
            }

            return $result;
        }

        public function delete()
        {
                $query="DELETE FROM productos WHERE id=$this->id";
                $delete=$this->db->query($query);

                if($delete)
                {
                        $result=true;
                }

                return $result;
        } 

        public function update()
        {
                $result=false;
                $query="UPDATE productos        
                        
                        SET categoria_id={$this->getCategoria_id()}, nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', 
                        precio={$this->getPrecio()}, stock={$this->getStock()}, oferta={$this->getOferta()} "
                        
                       
                ;
                if($this->getImagen() !=null)
                {
                        $query.= ", imagen='{$this->getImagen()}'";
                }

                $query.= " WHERE id={$this->getId()};";
                
                $update=$this->db->query($query);

                if($update)
                {
                        $result=true;
                }
                return $result;
        }
        
        public function getRandom($limit)
        {
                $query="SELECT * FROM productos ORDER BY RAND() LIMIT $limit";
                $producto=$this->db->query($query);
                                
                return $producto;
        }

        public function prodCategoria($catId)
        {
                $query="SELECT * FROM productos 
                        
                        WHERE categoria_id=$catId
                        
                        ORDER BY id ASC; "
                ;
                
                $showcat=$this->db->query($query);

                return $showcat;
        }
       
    }

?>