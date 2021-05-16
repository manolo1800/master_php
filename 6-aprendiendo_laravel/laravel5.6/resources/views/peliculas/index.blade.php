<h1>{{$titulo}}</h1>

@if(isset($pagina))
    <h3>la pagina es: {{$pagina}}</h3>
@endif

<a href="{{ route('detalle.pelicula') }}">ir al detalle</a>