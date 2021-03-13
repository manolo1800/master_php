<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h1>formulario</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">nombre:</label>
        <input type="text" name="nombre" /><br><br>

        <label for="apellido">apellido:</label>
        <input type="text" name="apellido"><br><br>
        <label for="gender">sexo:</label>
        <p>
            <label for="gender">hombre</label>
            <input type="checkbox" name="gender" value="hombre">

            <label for="gender">mujer</label>
            <input type="checkbox" name="gender" value="mujer"><br><br>
        </p>
        <label for="color">color</label>
        <input type="color" name="color"><br><br>

        <label for="date">fecha</label>
        <input type="date" name="date"><br><br>

        <label for="correo">correo</label>
        <input type="email" name="color" placeholder="introduce tu correo"><br><br>

        <label for="fail">archivo</label>
        <input type="file" name="fail"><br><br>

        <label for="number">numero</label>
        <input type="number" name="number"><br><br>

        <label for="password">contraseña</label>
        <input type="password" name="password"><br><br>

        <label for="luchador">luchadores:</label>
        <p>
            <label for="luchador">pako</label>
            <input type="radio" name="luchador" value="pako"><br><br>

            <label for="luchador">loko</label>
            <input type="radio" name="luchador" value="loko"><br><br>
        <p>
        <label for="tel">telefono</label>
        <input type="tel" name="tel"><br><br>
        
        <label for="url">url</label>
        <input type="url" name="url"><br><br>
        
        <textarea placeholder="escribe"></textarea><br><br>

        <select name="pelis">
            <option>spiderman</option>
            <option>batman</option>
            <option>ironpan</option>
        </select><br/><br/>
        
        <input type="submit" name="enviar">
    </form>
</body>
</html>