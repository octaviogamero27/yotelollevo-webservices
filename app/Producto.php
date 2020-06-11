<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=["nombre","precio","descripcion","img_url","en_stock"];
}
