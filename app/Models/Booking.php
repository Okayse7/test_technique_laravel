<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Champs autorisés pour l'assignation de masse (création/modification)
    protected $fillable = [
        'user_id',        // L'utilisateur qui a réservé
        'property_id',   // Le bien réservé
        'start_date',    // Date de début de la réservation
        'end_date',      // Date de fin de la réservation
    ];

    // Relation : une réservation appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation : une réservation concerne une propriété
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
