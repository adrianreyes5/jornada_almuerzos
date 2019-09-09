<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public $timestamps = false;

    protected $table = "ingredientes";
    protected $fillable = ['nombre', 'cantidad'];
    protected $primaryKey = 'id';

    public function Compras() {
        return $this->hasMany(\App\Compra::class,'ingrediente_id');
    }

    public function Receta_Ingredientes() {
        return $this->hasMany(\App\ingrediente_receta::class,'ingrediente_id');
    }
}
