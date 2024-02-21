<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'categoria',
        'precio',
        'imagen',
        'subcategoria',
        'peso',
        'medidas',
        'color',
        'tipo',
        'diametro',
        'eje',
        'altura',
        'informacion_adicional'
    ];
}
