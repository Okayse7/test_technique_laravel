<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [     // Champs autorisés pour l'assignation de masse pour évtiter les erreurs de sécurité
        'name',
        'description',
        'price_per_night',
    ];
}
