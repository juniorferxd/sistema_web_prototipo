<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table='stock';

    protected $primaryKey='id_stock';

    protected $fillable = [
        'id_stock', 
        'id_producto', 
        'cantidad_stock'
    ];
}
