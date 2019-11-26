<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MdlFactura extends Model{
    protected $table = 'facturas';
    //protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'id_cliente',
        'id_pago'        
    ];

    protected $hidden= ['created_at','updated_at'];
}
