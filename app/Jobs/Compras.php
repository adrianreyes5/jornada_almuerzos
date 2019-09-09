<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Orden;
use App\Ingrediente;
use App\Compra;
use App\ingrediente_receta;
use App\Receta;
use GuzzleHttp\Client;
use Illuminate\Support\Carbon;

class Compras implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $orden;
    protected $ingrediente;
    protected $receta;
    protected $ing_cantidad;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($orden,$ingrediente,$receta,$ing_cantidad)
    {
        $this->orden = $orden;
        $this->ingrediente = $ingrediente;
        $this->receta = $receta;
        $this->ing_cantidad = $ing_cantidad;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        /**Busco la orden, ingrediente, receta y el ingrediente que contiene */
        $orden = Orden::find($this->orden);
        $ingrediente = Ingrediente::find($this->ingrediente);
        $receta = Receta::find($this->receta);
        $receta_ing =  ingrediente_receta::where('receta_id', $receta->id)->where('ingrediente_id', $ingrediente->id)->first();

        $ing_cantidad = $this->ing_cantidad; /** cantidad actual del ingrediente */
        $comprar = true;


        /** Busco en el mercado */
        $client = new Client();
        $url = 'https://recruitment.alegra.com/api/farmers-market/buy?ingredient=';
        $request = $client->get($url.$ingrediente->nombre);
        $data = json_decode($request->getBody()->getContents());

        if($ing_cantidad >= $receta_ing->cantidad_ing ) {
            /** Si la cantidad actual es mayor al pedido
             *  No necesito comprar en el mercado
             */
            $resta = ($ing_cantidad - $receta_ing->cantidad_ing);
            $ingrediente->update(['cantidad' => $resta]);
            $comprar = false;
        }

        /** Si Necesito comprar en el mercado */
        if($comprar) {
            if($data->quantitySold > 0) {
                $fecha = Carbon::now();
                $fecha->format('d-m-Y');
                /** Sumo la cantidad comprada más la cantidad que tenia */
                $cantidad_actual = $data->quantitySold + $this->ing_cantidad;
                $compra = Compra::create([
                    'ingrediente_id'=>  $ingrediente->id,
                    'orden_id'      =>  $orden->id,
                    'cantidad'      =>  $data->quantitySold,
                    'fecha'         =>  $fecha
                    /** Genero mi compra */
                ]);

                if($receta_ing->cantidad_ing <= $cantidad_actual) {
                    /**Si la cantidad solicitada es menor a la actual
                     * Resto la diferencia y entrego la orden
                     */
                    $resta = ($cantidad_actual - $receta_ing->cantidad_ing);
                    $ingrediente->update(['cantidad' => $resta]);
                    $orden->update(['estado_entrega' => 'Entregado']);
                }else{
                    Compras::dispatch($orden->id,$ingrediente->id,$receta->id,$ing_cantidad);
                }
            }else{
                Compras::dispatch($orden->id,$ingrediente->id,$receta->id,$ing_cantidad);
            }
        }
    }
}
