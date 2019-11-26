<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MdlModoPago extends Model
{
    protected $table = 'modo_pagos';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $hidden= ['created_at','updated_at'];
}
