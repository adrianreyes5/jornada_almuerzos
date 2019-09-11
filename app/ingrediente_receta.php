<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingrediente_receta extends Model
{
    public $timestamps = false;

    protected $table = "ingrediente_recetas";
    protected $fillable = [
        'receta_id',
        'ingrediente_id',
        'cantidad'
    ];
    protected $primaryKey = 'id';

    public function Receta() {
        return $this->belongsTo(\app\Receta::class,'receta_id');
    }

    public function Ingrediente() {
        return $this->belongsTo(\App\Ingrediente::class,'ingrediente_id');
    }
}
