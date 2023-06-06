<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Producto;


class ProductoController extends Controller
{
    
    public function index()
    {
        //
        $productos= Producto::all();
        return view('admin.productos.index',compact('productos'));
    }

    public function create()
    {
        //
        return view('admin.productos.create');
    }

   
    public function store(Request $request)
    {
        //
        $request->validate(
            ['nombre'=>'required',
            'precio'=>'required',
            'categoria'=>'required',
            'stock'=>'required']    
        );


        $producto = Producto::create($request->all());
        return redirect()->route('admin.productos.edit', $producto)->with('Mensaje','El producto ha sido Registrado correctamente');
    }

    public function show(Producto $producto)
    {
        //
        return view('admin.productos.show');
    }

   
    public function edit(Producto $producto)
    {
       
        return view('admin.productos.edit',compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        
        $producto->update($request->all());
        return redirect()->route('admin.productos.index', $producto)->with('Mensaje','El producto ha sido editado correctamente');

    }

    
    public function destroy(Producto $producto)
    {
        
        $producto->delete();
        return redirect()->route('admin.productos.index')->with('Mensaje','El producto ha sido eliminado correctamente');
    }
}
