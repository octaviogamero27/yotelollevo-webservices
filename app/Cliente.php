<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=["nombre","telefono","telefono_opcional",
        "direccion","direccion_opcional","direccion_google_maps","activo"];

}
