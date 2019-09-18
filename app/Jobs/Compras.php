<?php

namespace App\Jobs;

use App\Compra;
use App\Ingrediente;
use App\Ingrediente_Receta;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Compras implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $receta;
    protected $orden;
    protected $ingrediente_id;
    protected $cantidad;
    protected $acum;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($receta, $orden, $ingrediente_id, $cantidad, $acum)
    {
        $this->receta = $receta;
        $this->orden = $orden;
        $this->ingrediente_id = $ingrediente_id;
        $this->cantidad = $cantidad;
        $this->acum = $acum;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $receta         = $this->receta;
        $orden          = $this->orden;
        $ingrediente_id = $this->ingrediente_id;
        $cantidad       = $this->cantidad;
        $acum           = $this->acum;
        $comprar        = true;

        $ingrediente    = Ingrediente::find($ingrediente_id);

        $client     = new Client();
        $url        = 'https://recruitment.alegra.com/api/farmers-market/buy?';
        $request    = $client->get($url . 'ingredient=' . $ingrediente['nombre']);
        $data       = json_decode($request->getBody()->getContents());

        if ($ingrediente->cantidad >= $cantidad) {
            $resta = ($ingrediente->cantidad - $cantidad);
            $ingrediente->update(['cantidad' => $resta]);
            $comprar = false;
        }

        if ($comprar) {
            if ($data->quantitySold > 0) {
                $fecha = Carbon::now();
                $cantidadActual = $data->quantitySold + $ingrediente->cantidad;
                $acum = $acum + $cantidadActual;
                print($receta->nombre
                    . ' - Nombre: '     . $ingrediente->nombre
                    . ' - Cantidad: '   . $ingrediente->cantidad
                    . ' - CantidadP: '  . $cantidad
                    . ' - Mercado: '    . $data->quantitySold
                    . ' - Acumulardor: '. $acum
                );
                $compra = new Compra();
                $compra->fecha_entrega  = $fecha;
                $compra->orden_id       = $orden->id;
                $compra->ingrediente_id = $ingrediente->id;
                $compra->cantidad       = $data->quantitySold;
                $compra->save();
                if ($acum >= $cantidad) {
                    $resta = ($acum - $cantidad);
                    $ingrediente->update(['cantidad' => $resta]);
                    $orden->update(['estado_entrega' => 1]);
                    $acum = 0;
                } else {
                    Compras::dispatch($receta, $orden, $ingrediente_id, $cantidad, $acum);                }
            } else {
                Compras::dispatch($receta, $orden, $ingrediente_id, $cantidad, $acum);
            }
        }
    }
}
