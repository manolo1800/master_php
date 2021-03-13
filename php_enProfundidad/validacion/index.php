
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h1>formulario</h1>
    
    <?php 
        
        if(isset ($_GET['error']))
        {
            $error=$_GET['error'];
            if($error !='okey')
            {
                if($error=='nombre')
                {
                    echo "<strong style='color: red'>introducir bien el nombre</strong>";
                }
                if($error=='apellido')
                {
                    echo "<strong style='color: red'>introducir bien el apellido</strong>";
                }
                if($error=='edad')
                {
                    echo "<strong style='color: red'>introducir bien la edad</strong>";
                }
                if($error=='email')
                {
                    echo "<strong style='color: red'>introducir bien el email</strong>";
                }
                if($error=='contraseña')
                {
                    echo "<strong style='color: red'>introducir una contraseña de minimo cinco caracteres</strong>";
                }
            }
        }
    ?>
    <form method="POST" action="procesar_formulario.php"><br/>
        <label for="nombre">Nombre</label><br/>
        <input  type="text" name="nombre" required="required" pattern="[a-zA-Z ]+"><br/>

        <label for="apellido">Apellido</label><br/>
        <input  type="text" name="apellido" required="required" pattern="[a-zA-Z ]+"><br/>

        <label for="edad">Edad</label><br/>
        <input  type="number" name="edad" required="required" pattern="[0-9]+"><br/>

        <label for="email">Email</label><br/>
        <input type="email" name="email" required="required"><br/>

        <label for="contraseña">contraseña</label><br/>
        <input type="password" name="contraseña" required="required"><br/>

        <input type="submit" value="enviar">
    </form>
</body>
</html>