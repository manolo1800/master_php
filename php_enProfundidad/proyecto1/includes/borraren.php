<?php

require_once 'conexion.php';
require_once 'helpers.php';
$usuar=$_SESSION['usuario']['id'];
$ent=$_SESSION['entrada'];
echo $ent;
if(isset($_POST))
{
    $sql="DELETE FROM entradas WHERE id='$ent' ";
    $delete=mysqli_query($conexion,$sql);
    
}header("location:../modificarEntradas.php?id=$usuar");

?>