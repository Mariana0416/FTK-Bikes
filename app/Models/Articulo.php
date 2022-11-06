<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proveedore;

class Articulo extends Model
{
    use HasFactory;
    

    public function proveedores(){
        return $this->belongsTo(proveedore::class,'proveedor_id','id');
    }

    public function compras(){
        return $this->belongsToMany(articuloscompra::class,'articuloscompras','articulo_id','compra_id')->withPivot('id');
    }
}
