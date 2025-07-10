<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Champs autorisés pour l'assignation de masse pour évtiter les erreurs de sécurité
    protected $fillable = [
        'user_id',        
        'property_id',   
        'start_date',    
        'end_date',     
    ];

    // réservation appartenant à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // réservation concernant une propriété
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
