@if(isset($fruta))    
    
    <h1>{{$fruta->nombre}}</h1>

    <p>{{$fruta->descripcion}}</p>

    <p>{{$fruta->precio}}</p>

    <a href="{{ action('FrutaController@delete',['id' => $fruta->id]) }}">eliminar</a>
    <a href="{{ action('FrutaController@editar',['id' => $fruta->id]) }}">editar</a>

@else 
    <h1>no existe la fruta</h1>
@endif