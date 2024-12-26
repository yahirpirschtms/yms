<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index()
    {
        // Obtenemos los datos de la base de datos
        $shipments = Shipment::all();

        // Mapeamos los datos al formato esperado por FullCalendar
        $events = $shipments->map(function ($shipment) {
            // Convertimos la fecha sugerida de entrega a un objeto Carbon
            $suggestedDeliveryDate = Carbon::parse($shipment->suggesteddeliverydate);

            return [
                'title' => 'STM ID: ' . $shipment->stm_id,
                'start' => $suggestedDeliveryDate->format('Y-m-d\TH:i:s'), // Formato ISO 8601
                'description' => "
                    Reference: {$shipment->reference},
                    Origin: {$shipment->origin},
                    Destination: {$shipment->destination},
                    Units: {$shipment->units},
                    Pallets: {$shipment->pallets},
                    Suggested Delivery Date: {$suggestedDeliveryDate->format('d/m/Y H:i')}
                ",
            ];
        });

        // Pasamos los eventos a la vista
        return view('calendar', ['events' => $events->toArray()]);
    }
}
