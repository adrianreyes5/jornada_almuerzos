<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    public $timestamps = false;

    protected $table = "ordenes";
    protected $fillable = [
        'receta_id',
        'estado_entrega',
        'fecha'
    ];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
    public function Compra(){
        return $this->hasMany(\App\Compra::class,'orden_id');
    }
    public function Receta(){
        return $this->belongsTo(\App\Receta::class, 'receta_id');
    }
}
