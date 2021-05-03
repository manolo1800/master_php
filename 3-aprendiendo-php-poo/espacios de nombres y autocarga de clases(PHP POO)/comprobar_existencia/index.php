<?php

require_once 'autoload.php';

    use MisClases\Usuario; 
    use MisClases\Entrada;
    use MisClases\Categoria;
    
    class Principal
    {
        public $usuario,$categoria,$entrada;

        public function __construct()
        {
            $this->usuario= new Usuario();
            $this->categoria= new Categoria();
            $this->entrada= new Entrada();
            
        }

        public function getUsuario()
        {
            return $this->usuario;
        }


        public function getCategoria()
        {
            return $this->categoria;
        }


        public function getEntrada()
        {
            return $this->entrada;
        }
    }

    //comprobar existencia clase de metodos
    $class= @class_exists('MisClases\Usuario');
    if($class)
    {
        echo "La clase si existe";
    }else{
        echo "la clase no existe";
    }

    echo "<br/>";

    //comprobar metodos 

    //forma 1 comprueba el numero de metodos dentro de la clase Principal
    $principal= new Principal();
    var_dump(get_class_methods($principal));
    
    echo "<br/>";

    //forma 2 busca un metodo especifico dentro de la clase principal con la funcion array_search y get_class_methods

    $metodos= get_class_methods($principal);
    $busqueda=array_search('getEntrada',$metodos);
    var_dump($busqueda);


?>