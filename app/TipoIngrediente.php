<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIngrediente extends Model
{
    public $timestamp = false;

    protected $table = "tipo_ingrediente";
    protected $fillable = ['nombre'];
    protected $primaryKey = 'id';

    public function Ingredientes()
    {
        return $this->hasMany(\App\Ingrediente::class, 'tipo_ingrediente_id');
    }
}
