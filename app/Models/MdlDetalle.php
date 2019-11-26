<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MdlDetalle extends Model{
    protected $table = 'detalles';

    protected $fillable = [
        'id_factura',
        'id_producto',
        'cantidad',
        'precio'
    ];

    protected $hidden= ['created_at','updated_at'];
}
