<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\ProveedorController;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin' ,[HomeController::class, 'index'] )->name('admin.index');
Route::resource('admin/productos', ProductoController::class)->names('admin.productos');
Route::resource('admin/proveedores', ProveedorController::class)->names('admin.proveedores');