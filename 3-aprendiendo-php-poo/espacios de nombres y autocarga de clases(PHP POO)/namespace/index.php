<?php

    require_once 'autoload.php';

    use MisClases\Usuario; 
    use MisClases\Entrada;
    use MisClases\Categoria;
    use PanelAdmin\Usuario as UsuarioII;
    
    class Principal
    {
        public $usuario,$categoria,$entrada;

        public function __construct()
        {
            $this->usuario= new Usuario();
            $this->categoria= new Categoria();
            $this->entrada= new Entrada();
            
        }
    }

    $principal= new Principal();
    var_dump($principal->usuario);
    echo "<br/>";
    var_dump($principal->categoria);
    echo "<br/>";
    var_dump($principal->entrada);
    echo "<br/>";
    
    $usuario= new UsuarioII();
    var_dump($usuario);
?>