<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cliente;

class Compra extends Model
{
    use HasFactory;

    public function clientes(){
        return $this->belongsTo(Cliente::class,'cliente_id','id');
    }

    public function articulos(){
        return $this->belongsToMany(articuloscompra::class,'articuloscompras','compra_id','articulo_id')->withPivot('id');
    }
}
