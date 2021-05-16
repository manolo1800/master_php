<h1>frutas</h1>
<a href="{{ action('FrutaController@create') }}">crear</a>
<ul>
    @foreach ($frutas as $fruta)
        <li>
            <a href="{{action('FrutaController@detalle',['id'=>$fruta->id])}}">{{$fruta->nombre}}</a><br>
        </li>    
    @endforeach
</ul>