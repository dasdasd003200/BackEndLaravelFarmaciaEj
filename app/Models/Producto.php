<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'descripcion',
        'imagen',
        'cantidad_minima',
        'stock',
        'precio_compra',
        'precio_venta',
        'categoria_id',
    ];



}
