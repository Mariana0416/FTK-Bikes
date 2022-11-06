<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Compra;

class Cliente extends Model
{
    use HasFactory;

    public function compras(){
        return $this->hasMany(Compra::class,'cliente_id','id');
    }
}
