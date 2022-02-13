@extends('layouts.plantilla')
@section('title','Nuevo Artículo')
@section('content')
<form action="{{route('guardar', $articulo)}}" method="post">
    @csrf
	@method('put')

	Codigo: <input type="text" size="5" name="codigo" value="{{$articulo->id}}" readonly="readonly">
	<br><br>
	<h3>Título</h3>
	<input type="text" size="50" name="titulo" value="{{$articulo->titulo}}">
	<br><br>Fecha: <input type="text" size="10" name="fecha" value="{{$articulo->fecha}}" readonly="readonly">
	
	<br><h3>Contenido del articulo</h3>
	<textarea name="contenido" rows="10" cols="80">{{$articulo->contenido}}</textarea>
	<br><input type="submit" value="GRABAR">
</form>
@endsection