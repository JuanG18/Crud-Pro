@extends('adminlte::page')

@section('title', 'Lista de Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
@if (session('Mensaje'))
<div class="alert alert-success">
    <strong>{{session('Mensaje')}}</strong>
</div>
    @endif
    <div class="card-header">
        <a href="{{route('admin.productos.create')}}" class="btn btn-primary">Nuevo Producto</a>
    </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CATEGORIA</th>
                            <th>PRECIO</th>
                            <th>STOCK</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->categoria}}</td>
                                <td>{{$producto->precio}}</td>
                                <td>{{$producto->stock}}</td>
                                <td width="15px"><a href="{{route('admin.productos.edit', $producto)}}" class="btn btn-info btn-sm">Editar</a></td>
                                <td width="15px">
                                    <form action="{{route('admin.productos.destroy', $producto)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@stop
