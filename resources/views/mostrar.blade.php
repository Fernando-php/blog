@extends('layouts.plantilla')
@section('title','Nuevo Artículo')
@section('content')
    @csrf
	Codigo: {{$articulo->id}}
	<br><br>
	<h3>Título</h3>
	{{$articulo->titulo}}
	<br><br><strong>Fecha:</strong>  {{date("d/m/Y",strtotime($articulo->fecha))}}
	
	<br><h3>Contenido del articulo</h3>
	{{$articulo->contenido}}
	<br>
@endsection