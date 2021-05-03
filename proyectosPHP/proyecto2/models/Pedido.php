<?php

    class Pedido
    {
        public $id,$usuario_id,$provincia,$localidad,$direccion,$coste,$estado,$fecha,$hora;

        public function __construct()
        {
            $this->db = DataBase::connect();
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
         * Get the value of usuario_id
         */ 
        public function getUsuario_id()
        {
                return $this->usuario_id;
        }

        /**
         * Set the value of usuario_id
         *
         * @return  self
         */ 
        public function setUsuario_id($usuario_id)
        {
                $this->usuario_id = $usuario_id;
        }

        /**
         * Get the value of provincia
         */ 
        public function getProvincia()
        {
                return $this->provincia;
        }

        /**
         * Set the value of provincia
         *
         * @return  self
         */ 
        public function setProvincia($provincia)
        {
                $this->provincia = $provincia;
        }

        /**
         * Get the value of localidad
         */ 
        public function getLocalidad()
        {
                return $this->localidad;
        }

        /**
         * Set the value of localidad
         *
         * @return  self
         */ 
        public function setLocalidad($localidad)
        {
                $this->localidad = $localidad;
        }

        /**
         * Get the value of direccion
         */ 
        public function getDireccion()
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */ 
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;
        }

        /**
         * Get the value of coste
         */ 
        public function getCoste()
        {
                return $this->coste;
        }

        /**
         * Set the value of coste
         *
         * @return  self
         */ 
        public function setCoste($coste)
        {
                $this->coste = $coste;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;
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
                $this->fecha = $fecha;
        }

        /**
         * Get the value of hora
         */ 
        public function getHora()
        {
                return $this->hora;
        }

        /**
         * Set the value of hora
         *
         * @return  self
         */ 
        public function setHora($hora)
        {
                $this->hora = $hora;
        }

        public function mostrar()
        {
                $query="SELECT * FROM pedidos ORDER BY id DESC;";
                $pedidos=$this->db->query($query);
                
                if($pedidos)
                {
                        return $pedidos;
                }
        }

        public function getOne()
        {
                $query="SELECT p.*,u.id as 'usuario',u.nombre as 'nombre' ,u.apellidos as 'apellido' ,u.email as 'email' FROM pedidos p
                        JOIN usuarios u ON p.usuario_id=u.id
                        WHERE p.id={$this->getId()} ;"
                ;
                $pedidos=$this->db->query($query);
                
                if($pedidos)
                {
                        return $pedidos->fetch_object();
                }
        }

        public function getByUser()
        {
                $query="SELECT * FROM pedidos 
                        WHERE usuario_id={$this->getUsuario_id()}
                        ORDER BY id DESC;";
                $pedidos=$this->db->query($query);
                return $pedidos;
        }

        public function getOne_usuario_id()
        {
                $query="SELECT p.id,p.coste FROM pedidos p
                        WHERE p.usuario_id='{$this->getUsuario_id()}'
                        ORDER BY p.id DESC LIMIT 1;    ";
                $pedidos=$this->db->query($query);
                return $pedidos->fetch_object();
        
        }

        public function getProductosByPedidos($id)
        {
                $query= "SELECT p.* FROM productos p
                        WHERE p.id IN (SELECT producto_id FROM lineas_pedidos WHERE pedido_id={$id} ) "; 

                $query= "SELECT pr.*, lp.unidades FROM productos pr
                        INNER JOIN lineas_pedidos lp ON pr.id = lp.producto_id 
                        WHERE lp.pedido_id={$id};";                        
                $producto=$this->db->query($query);
                return $producto;   
                                                         
        }

        public function guardarPedido()
        {
                $query="INSERT INTO pedidos VALUES(NULL,{$this->getUsuario_id()},'{$this->getProvincia()}','{$this->getLocalidad()}','{$this->getDireccion()}','{$this->getEstado()}'
                        ,{$this->getCoste()},CURDATE(),NULL);"
                ;
                $save=$this->db->query($query);

                $result=false;
                if($save)
                {
                       $result=true;
                }

                return $result;
        }

        public function linea_save()
        {
                $sql="SELECT LAST_INSERT_ID() AS 'pedido'; ";
                $query=$this->db->query($sql);
                $pedidos_id=$query->fetch_object()->pedido;

                foreach($_SESSION['carrito'] as $indice => $elemento)
                {
                        $producto=$elemento['producto'];

                        $save=" INSERT INTO lineas_pedidos VALUES(NULL,{$pedidos_id},{$producto->id},{$elemento['unidades']});";
                        $save_line=$this->db->query($save);
                }

                

        }

        public function cambiarEstado()
        {
                $query="UPDATE pedidos 
                        SET estado='{$this->getEstado()}'
                        WHERE id={$this->getId()}
                ";
                $estado=$this->db->query($query);
                
        }

        public function restStock($unidades,$id)
        {
                $query="UPDATE productos SET stock=(stock-$unidades) WHERE id=$id";
                
                $update=$this->db->query($query);

                return $update;
        }
    }    
    

?>