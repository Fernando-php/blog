@extends('layouts.plantilla')
@section('title','Nuevo Artículo')
@section('content')
<form action="{{route('insertar')}}" method="post">
    @csrf
	@method('put')
	<h3>Título del artículo</h3>
	<input type="text" size="50" name="titulo">
	<br><br>Fecha: <input type="text" size="10" name="fecha" value="{{$fecha}}" readonly="readonly">
	<br><h3>Contenido del articulo</h3>
	<textarea name="contenido" rows="10" cols="80"></textarea>
	<br><input type="submit" value="GRABAR">
</form>
@endsection