<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'producto_id',
        'cantidad',
        'precio',
        'venta_id',


    ];



}
