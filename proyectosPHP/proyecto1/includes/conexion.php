<?php
   $servidor="localhost";
   $usuario="root";
   $contraseña="";
   $db="blogvideojuegos";
       
   $conexion=mysqli_connect($servidor,$usuario,$contraseña,$db);
   mysqli_query($conexion, "SET NAME 'utf8' ");

   //comprobar la conexión 
   /*   
   if ($conexion->connect_errno) {
      printf("Conexión fallida: %s\n", $conexion->connect_error);
      exit();
   }

   //comprobar si el servidor sigue vivo *
   if ($conexion->ping()) {
      printf ("¡La conexión está bien!\n");
   } else {
      printf ("Error: %s\n", $conexion->error);
   }
   */      
   //iniciar cesion
   if(!isset($_SESSION))
   {
      session_start();
   }
?> 