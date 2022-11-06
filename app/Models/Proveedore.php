<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;

class Proveedore extends Model
{
    use HasFactory;

    public function articulos(){
        return $this->hasMany(Articulo::class,'articulo_id','id');
    }
}
