<?php 

require_once 'conexion.php';

if(isset($_POST['cambiard']))
{

    if(!isset($_SESSION))
    {
        session_start();
    }
    
    $_SESSION['cambiard']=' ';
        
}header('location:../misdatos.php');

?>