<?php 

require_once 'conexion.php';

if(isset($_GET['id']))
{
   
    $_SESSION['cambiard']=' ';
    $_SESSION['entrada']=$_GET['id']; 
    
}header('location:../modificarEntradas.php');

?>