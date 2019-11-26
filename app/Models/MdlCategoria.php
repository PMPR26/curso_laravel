<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MdlCategoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $hidden= ['created_at','updated_at'];
}
