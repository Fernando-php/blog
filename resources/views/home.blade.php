@extends('layouts.plantilla')
@section('title','Mi Blog')
@section('content')
<div class="nuevo"><a class="botoncito" href="{{route('crear')}}">Nuevo Artículo</a></div>
{{-- <form action="{{route('crear')}}"><input type="submit" value="Nuevo Artículo"></form> --}}
<br><br><hr>
@foreach ($articulos as $articulo)
    <a class="titulo" href="{{route('mostrar',$articulo)}}"><h3>{{$articulo->titulo}}</h3></a>
    <p>{{$articulo->contenido}}</p>
    <br>
    <p>Editado: {{date("d/m/Y",strtotime($articulo->fecha))}}</p>
    {{-- <form action="{{route('borrar',$articulo)}}">
        <input type="submit" value="Borrar">
    </form> --}}
    <a class="botoncito" href="{{route('borrar',$articulo)}}">Borrar</a>
    {{-- <form action="{{route('modificar',$articulo)}}">
        <input type="submit" value="Modificar">
    </form> --}}
    <a class="botoncito" href="{{route('modificar',$articulo)}}">Modificar</a>
    <br><br><hr>
@endforeach
{{ $articulos->links() }}
<h2>Y no olvides entrar todos los dias para no perderte nuevos posts!!!</h2>
@endsection