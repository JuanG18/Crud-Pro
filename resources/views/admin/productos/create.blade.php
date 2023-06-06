@extends('adminlte::page')

@section('title', 'Nuevo Productos')

@section('content_header')
    <h1>Nuevo Producto</h1>
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{route('admin.productos.store')}}">
    @csrf
		<label for="codigo">Nombre:</label>
		<input class="form-control" name="nombre" required type="text"  placeholder="Nombre del producto">
        @error('nombre')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="precioVenta">Precio:</label>
		<input class="form-control" name="precio" required type="number"  placeholder="Precio del producto">
        @error('precio')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="precioCompra">Categorias:</label>
		<input class="form-control" name="categoria" required type="text" id="categorias" placeholder="Categoria">
        @error('categoria')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="existencia">Stock:</label>
		<input class="form-control" name="stock" required type="number" id="stock" placeholder="Cantidad">
        @error('stock')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
    </div>
    </div>
@stop

@section('content')
  
@stop
