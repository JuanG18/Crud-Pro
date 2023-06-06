@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Proveedores</h1>
@stop

@section('content')
    
    <div class="card-header">
        <a href="{{route('admin.proveedores.create')}}" class="btn btn-primary">Nuevo Proveedor</a>
    </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>DESCRIPCION</th>
                            <th>UBICACION</th>
                            <th>CONTACTO</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedores as $proveedor)
                            <tr>
                                <td>{{$proveedor->id}}</td>
                                <td>{{$proveedor->nombre}}</td>
                                <td>{{$proveedor->descripcion}}</td>
                                <td>{{$proveedor->ubicacion}}</td>
                                <td>{{$proveedor->contacto}}</td>
                                <td width="15px"><a href="{{route('admin.proveedores.edit', $proveedor)}}" class="btn btn-info btn-sm">Editar</a></td>
                                <td width="15px">
                                    <form action="{{route('admin.proveedores.destroy', $proveedor)}}" method="POST">
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