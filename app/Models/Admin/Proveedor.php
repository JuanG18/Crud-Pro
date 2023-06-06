<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $filelable = [
        
        'nombre',
        'descripcion',
        'ubicacion',
        'contacto',
        
    ];
}
