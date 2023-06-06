@extends('adminlte::page')

@section('title', 'Nuevo Proveedor')

@section('content_header')
    <h1>Nuevo Proveedor</h1>
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{route('admin.proveedores.store')}}">
    @csrf
	<label for="codigo">Nombre:</label>
		<input class="form-control" name="nombre" required type="text"  placeholder="Nombre del proveedor" >
		@error('nombre')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="descripcion">Descripcion:</label>
		<input class="form-control" name="descripcion" required type="text"  placeholder="Descripcion">
		@error('descrip[cion')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="ubicacion">Ubicacion:</label>
		<input class="form-control" name="ubicacion" required type="text" id="ubicacion" placeholder="Ubicacion">
		@error('ubicacion')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="contacto">Contacto:</label>
		<input class="form-control" name="contacto" required type="text" id="contacto" placeholder="Contacto">
        @error('contacto')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
    </div>
    </div>
@stop

@section('content')
  
@stop
