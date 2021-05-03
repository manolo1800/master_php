<?php
    require_once 'configs/DataBase.php';
    class ModeloBase
    {
        public $db;
        
        public function __construct()
        {
            $this->db= DataBase::Conecting();
        }
        
        public function conseguirtodos($tabla)
        {
            $query=  $this->db->query("SELECT * FROM $tabla");
            return $query;
        }
    }
?>