<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional si ya se llama "shipments")
    protected $table = 'shipments';

    // Atributos asignables masivamente
    protected $fillable = [
        'reference', 'bonded', 'prealertdatetime', 'trailer_id',
        'suggesteddeliverydate', 'units', 'pallets', 'securityseals',
        'notes', 'overhaul_id', 'devicenumber', 'secondaryshipment_id',
        'driverassigneddate', 'pickupdate', 'intransitdate',
        'securedyarddate', 'company_id', 'currentstatus_id',
        'generic_id', 'origin', 'destination'
    ];

    // Atributos que son fechas
    protected $dates = [
        'suggesteddeliverydate',
        'prealertdatetime',
        'driverassigneddate',
        'pickupdate',
        'intransitdate',
        'securedyarddate'
    ];



    // Formateo de la fecha sugerida para entrega
    public function getFormattedSuggestedDeliveryDateAttribute()
    {
        return $this->suggesteddeliverydate
            ? $this->suggesteddeliverydate->format('m/d/Y H:i')
            : null;
    }
}
