@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
<h1>Editar proveedor {{$proveedor->nombre}}</h1>
@stop

@section('content')
@if (session('Mensaje'))
<div class="alert alert-success">
    <strong>{{session('Mensaje')}}</strong>
</div>
<div class="card">
@endif
    <div class="card-body">
    <form method="post" action="{{route('admin.proveedores.update',$proveedor)}}">
    @csrf
    @method('PUT')
		<label for="codigo">Nombre:</label>
		<input class="form-control" name="nombre" required type="text"  placeholder="Nombre del proveedor" value="{{$proveedor->nombre}}">
		@error('nombre')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="descripcion">Descripcion:</label>
		<input class="form-control" name="descripcion" required type="text"  placeholder="Descripcion" value="{{$proveedor->descripcion}}">
		@error('descrip[cion')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="ubicacion">Ubicacion:</label>
		<input class="form-control" name="ubicacion" required type="text" id="ubicacion" placeholder="Ubicacion" value="{{$proveedor->ubicacion}}">
		@error('ubicacion')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="contacto">Contacto:</label>
		<input class="form-control" name="contacto" required type="text" id="contacto" placeholder="Contacto" value="{{$proveedor->contacto}}">
        @error('contacto')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
    </div>
    </div>
@stop