<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('admin.proveedores.index',compact('proveedores'));
    }

    
    public function create()
    {
        return view('admin.proveedores.create');
    }

    
    public function store(Request $request)
    {
        $request-> validate(
            ['_token' => 'nullable',
            'nombre' => 'required',
            'descripcion' =>'required',
            'ubicacion' =>'required',
            'contacto' =>'required',]);


        $data = $request->except(['_token']);
        $proveedor = Proveedor::create($data, [
        'nombre' => 'required',
        'descripcion' => 'required',
        'ubicacion' => 'required',
        'contacto' => 'required',
        ]);
        return redirect()->route('admin.proveedores.edit',$proveedor);
    }

    
    public function show(Proveedor $proveedor)
    {
        return view('admin.proveedores.show');
    }

    
    public function edit(Proveedor $proveedor)
    {
       
        return view('admin.proveedores.edit',compact('proveedor'));
    }

    
    public function update(Request $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());
        return redirect()->route('admin.proveedores.index', $proveedor)->with('Mensaje','El proveedor ha sido editado correctamente');
    }

   
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('admin.proveedores.index')->with('Mensaje','El proveedor ha sido eliminado correctamente');
    }
}
