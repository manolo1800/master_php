<h1>registrarse</h1>

<form action="index.php?controller=Usuario&action=save" method="POST">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre">

    <label for="apellido">apellido</label>
    <input type="text" name="apellido">

    <label for="email">email</label>
    <input type="email" name="email">

    <label for="password">password</label>
    <input type="password" name="password">

    <label for="imagen">foto perfil</label>
    <input type="file" name="imagen">

    <input type="submit" value="GUARDAR">

</form>