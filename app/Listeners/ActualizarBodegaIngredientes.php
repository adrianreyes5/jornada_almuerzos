<?php

namespace App\Listeners;

use App\Events\OrdenCreada;
use App\Ingrediente;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActualizarBodegaIngredientes
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrdenCreada  $event
     * @return void
     */
    public function handle(OrdenCreada $event)
    {
        $receta = $event->receta;
        $recetaIngredientes = $receta->RecetaIngredientes()->where('receta_id', $receta->id)->get();
        
        foreach($recetaIngredientes as $recetaIng) {
            $ingrediente = $recetaIng->Ingrediente;
            $resta = ($ingrediente['cantidad'] - $recetaIng['cantidad']);
            
            $ingrediente->update(['cantidad' => $resta]);
        }
    }
}
