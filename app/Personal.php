<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table='Personal';

    protected $primaryKey='id_personal';

    protected $fillable = [
        'id_personal', 
        'id'
}
