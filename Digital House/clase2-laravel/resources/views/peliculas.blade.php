<html>

@extends('layouts.default')

@section('content')
    <h1>listado de peliculas encontradas:</h1>

    @foreach($peliculasEncontradas as $link)
    
    @endforeach
@endsection

</html>