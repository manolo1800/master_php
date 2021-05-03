<h1>{{$titulo}}</h1>

@foreach($listado as $list)
    <p>{{$list}}</p>
@endforeach

{{-- esto es un comentario --}}
<br><br><br>
{{$director or 'no hay director'}}