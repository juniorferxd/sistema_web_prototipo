<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table='Productos';

    protected $primaryKey='id_producto';

    protected $fillable = [
        'id_producto', 
        'nombre_producto', 
        'precio_unit',
        'marca', 
        'tipo'
    ];

    protected $guarded=[];
}
