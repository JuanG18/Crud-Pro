@extends('adminlte::page')

@section('title', 'Editar producto')

@section('content_header')
    <h1>Editar producto {{$producto->nombre}}</h1>
@stop

@section('content')
    @if (session('Mensaje'))
<div class="alert alert-success">
    <strong>{{session('Mensaje')}}</strong>
</div>
    @endif
    <div class="card">
    <div class="card-body">
    <form method="post" action="{{route('admin.productos.update',$producto)}}">
    @csrf
    @method('PUT')
		<label for="codigo">Nombre:</label>
		<input class="form-control" name="nombre" required type="text"  placeholder="Nombre del producto" value="{{$producto->nombre}}">
        @error('nombre')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="precioVenta">Precio:</label>
		<input class="form-control" name="precio" required type="number"  placeholder="Precio del producto" value="{{$producto->precio}}">
        @error('precio')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="precioCompra">Categorias:</label>
		<input class="form-control" name="categoria" required type="text" id="categorias" placeholder="Categoria" value="{{$producto->categoria}}">
        @error('categoria')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<label for="existencia">Stock:</label>
		<input class="form-control" name="stock" required type="number" id="stock" placeholder="Cantidad" value="{{$producto->stock}}">
        @error('stock')
            <span class="text-danger">{{$message}}</span>
        @enderror
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
    </div>
    </div>
@stop
