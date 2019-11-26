<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MdlCliente extends Model
{
    protected $table = 'clientes';
    //protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'fecha_nacimiento',
        'telefono',
        'email'
    ];

    protected $hidden= ['created_at','updated_at'];
}
