<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{

    public $timestamps = false;

    protected $table = 'compras';
    protected $primaryKey = 'id';

    protected $fillable = [
        'ingrediente_id',
        'orden_id',
        'cantidad',
        'fecha',
        'cantidad'
    ];

    public function Ingrediente() {
        return $this->belongsTo(\App\Ingrediente::class, 'ingrediente_id');
    }

    public function Orden() {
        return $this->belongsTo(\App\Orden::class, 'orden_id');
    }

}
