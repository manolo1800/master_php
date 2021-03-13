<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    //funcion para mostrar errores en el index
    function mostrarError($errores,$campo){
        $alerta='';
        if(isset($errores[$campo]) && !empty($campo))
        {
            $alerta="<div class = 'alerta alerta-error' >" . $errores[$campo] . "</div>";
        }
        return $alerta;
    }
    
    //funcion borrar errores y alerta completado en el index 
    function borrarErrores(){
        $borrado=false;
        
        //errores
        if(isset($_SESSION['errores']))
        {   
            unset($_SESSION['errores']);
        }
        
        //completado
        if(isset($_SESSION['completado']))
        {
            unset($_SESSION['completado']);
        }
        if(isset($_SESSION['realizado']))
        {
            unset($_SESSION['realizado']);
        }
        if(isset($_SESSION['error']))
        {
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['cambiard']))
        {
            unset($_SESSION['cambiard']);
        }
        if(isset($_GET['id']))
        {
            unset($_GET['id']);
        }
        return $borrado;
    }

    function mostrarCategorias($conexion)
    {
        $sql="SELECT * FROM categorias ORDER BY id ASC LIMIT 12";
        $categorias= mysqli_query($conexion,$sql);

        $result=array();
        if($categorias && mysqli_num_rows($categorias) >=1)
        {
            $result=$categorias;
        }
        return $result; 
    }

    function mostrarCategoria($conexion,$id)
    {
        $sql="SELECT * FROM categorias WHERE id='$id'";
        $categoria= mysqli_query($conexion,$sql);

        $result=array();
        if($categoria && mysqli_num_rows($categoria) >=1)
        {
            $result=mysqli_fetch_assoc($categoria);
        }
        return $result; 
    }

    function mostrarEntradas($conexion, $limit = null, $id = null, $id2 = null, $buscar = null )
    {
        $sql="SELECT e.*,c.nombre AS 'categoria' FROM entradas e
                    JOIN categorias c ON e.categoria_id=c.id ";
        
        if(!empty($id) && is_string($id))
        {
            $sql .=  " WHERE e.categoria_id='$id' ";
        }
        if(!empty($id2) && is_string($id2))
        {
            $sql .=  " WHERE e.usuario_id='$id2'";
        }
        if(!empty($buscar) && is_string($buscar))
        {
            $sql .=  "WHERE e.titulo LIKE '%$buscar%' OR e.descripcion LIKE '%$buscar%' ";
        }
        $sql .= " ORDER BY e.id DESC ";

        if($limit)
        {
            $sql .=  " LIMIT 6";
        }

        $tentradas= mysqli_query($conexion,$sql);
    
        $resultado=array();
        if($tentradas && mysqli_num_rows($tentradas) >=1)
        {
            $resultado=$tentradas;
        }
        return $resultado; 
    }

    function mostrarEntrada($conexion, $id)
    {
        
        $sql="SELECT e.*,c.nombre AS 'categoria' FROM entradas e
                    JOIN categorias c ON e.categoria_id=c.id
                    Where (e.id='$id')";
        
        $tentradas=mysqli_query($conexion,$sql);
        
        $resultado=array();
        if($tentradas && mysqli_num_rows($tentradas) >=1)
        {
            $resultado=mysqli_fetch_assoc($tentradas);
        }
        return $resultado; 
    }
    
    
?>
