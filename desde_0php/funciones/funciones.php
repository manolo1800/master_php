<?php
        function muestraNombres (){
            
            echo "Manuel Cisneros <br>";
            echo "Victor Robles <br>";
            echo "zeus <hr>";
        }

        //muestraNombres();
        
        function calculadora ($num1,$num2){
            $suma=$num1+$num2;
            $resta=$num1-$num2;
            $multiplicacion=$num1*$num2;
            $division=$num1/$num2;
            $cadena_texto="";
            $cadena_texto.="suma=$suma<br>";
            $cadena_texto.="resta=$resta<br>";
            $cadena_texto.="multiplicacion=$multiplicacion<br>";
            $cadena_texto.="division=$division<br>";
            return $cadena_texto;
        }

        //echo calculadora(5,3);

        function getNombre($nombre){
            $texto="el nombre es:$nombre";
            return $texto;
        }
        function getApellido($apellido){
            $texto="el apellido es:$apellido";
            return $texto;
        }        
        function devuelveNombre($nombre,$apellido){
            $texto=getNombre($nombre)
            ."<br>".
            getApellido($apellido);
            return $texto;
        }
        echo devuelveNombre("manuel","cisneros");
?>