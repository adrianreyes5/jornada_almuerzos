<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public $timestamps = false;

    protected $table = "ingredientes";
    protected $fillable = [
        'nombre',
        'cantidad',
        'tipo_ingrediente_id'
    ];
    protected $primaryKey = 'id';

    public function Compras()
    {
        return $this->hasMany(\App\Compra::class, 'ingrediente_id');
    }

    public function Tipo_Ingrediente()
    {
        return $this->belongsTo(\App\TipoIngrediente::class, 'tipo_ingrediente_id');
    }

    public function Ingredientes_Receta()
    {
        return $this->hasMany(\App\ingrediente_receta::class, 'ingrediente_id');
    }

    public function scopegetIngrediente($query,$id) {
        return $this->find($id);
    }
}
