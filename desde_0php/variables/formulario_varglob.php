<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulario</title>
</head>
<body>

	<h1>formulario en php</h1>
    <form method="POST" action="recibir_varglob.php">
		<p>
        <label for="nombre">nombre</label>
        <input type="text" name="nombre">
        </p>

        <p>
        <label for="apellidos">apellidos</label>
        <input type="text" name="apellidos">
        </p>

        <input type="submit" value="enviar">

	</form>

</body>
</html>