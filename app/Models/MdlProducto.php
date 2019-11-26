<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MdlProducto extends Model{
    protected $table = 'productos';

    protected $fillable = [
        'id_categoria',
        'nombre',
        'precio',
        'stock'
    ];

    protected $hidden= ['created_at','updated_at'];
}
