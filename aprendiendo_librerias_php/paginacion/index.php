<?php
require_once '../vendor/autoload.php';
//conexion a la db
$db= new mysqli('localhost','root','','MVC');
$db->query("SET NAMES 'utf8'");

//consulta para contar elementos a paginar
$sql="SELECT * FROM notas";
$consulta=$db->query($sql);
$num_elems_consu=$consulta->num_rows;
$num_eleme_pagina=2;

//hacer paginacion
$paginacion= new Zebra_Pagination();

//numero total de elementos a paginar
$paginacion->records($num_elems_consu);

//numero de elementos por paginar
$paginacion->records_per_page($num_eleme_pagina);

$page=$paginacion->get_page();
$empieza_aqui=(($page-1)*$num_eleme_pagina);
$sql="SELECT * FROM notas LIMIT $empieza_aqui,$num_eleme_pagina";
$notas=$db->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/pulblic/css/zebra_pagination.css" type="text/css">';

while($nota=$notas->fetch_object())
{
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->contenido}</h3>";
}
$paginacion->render();




?>
