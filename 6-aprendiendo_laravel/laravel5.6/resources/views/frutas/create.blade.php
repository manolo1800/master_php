<h1>crear fruta</h1>

<form action="{{ action('FrutaController@insert') }}" method="POST">

    {{csrf_field() }}

    <label for="nombre">nombre</label><br>
    <input type="text" name="nombre"><br><br>

    <label for="descripcion">descripcion</label><br>
    <input type="text" name="descripcion"><br><br>

    <label for="precio">precio</label><br>
    <input type="number" name="precio"><br><br>

    <input type="submit" value="enviar">
</form>