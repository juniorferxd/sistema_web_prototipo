<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento_venta extends Model
{
     protected $table='Documento_venta';

    protected $primaryKey='id_venta';

    protected $fillable = [
        'id_venta', 
        'nombre_cliente', 
        'DNI_cliente',
        'fecha_emision', 
        'cantidad_producto', 
        'id_personal', 
        'id_producto'
}
