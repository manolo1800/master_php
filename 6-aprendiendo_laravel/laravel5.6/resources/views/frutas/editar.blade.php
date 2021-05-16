
@if(isset($fruta))    
    
<h1>{{$fruta->nombre}}</h1>

<form action="{{ action('FrutaController@update',['id' => $fruta->id]) }}" method="POST">

    {{csrf_field() }}

    <label for="nombre">nombre</label><br>
    <input type="text" name="nombre" value="{{$fruta->nombre}}"><br><br>

    <label for="descripcion">descripcion</label><br>
    <input type="text" name="descripcion" value="{{$fruta->descripcion}}" ><br><br>

    <label for="precio">precio</label><br>
    <input type="number" name="precio" value="{{$fruta->precio}}" ><br><br>

    <input type="submit" value="enviar">

</form>

@else 
<h1>no existe la fruta</h1>
@endif