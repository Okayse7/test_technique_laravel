<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\Property;
use App\Models\User;

class BookingManager extends Component
{
    public $name = '';
    public $date = '';
    public $end_date = '';
    public $showForm = false; // Indique si le formulaire de réservation est affiché
    public $property = '';

    protected $listeners = ['openBookingForm' => 'openForm'];

    public function openForm(...$args) // écoute l'événement 'openBookingForm' pour ouvrir le formulaire de réservation et stocker l'ID de la propriété
    {
        $propertyId = $args[0];
        $this->property = $propertyId;
        $this->showForm = true;
    }

    public function submit() // lorsque l'utilisateur soumet le formulaire de réservation
    {
        // Associer la réservation à l'utilisateur connecté
        $user = auth()->user();
        if (!$user) {
            session()->flash('success', "Vous devez être connecté pour réserver.");
            return;
        }

        $property = Property::find($this->property); // Recherche de la propriété par son ID dans la base de données
        if (!$property) {
            session()->flash('success', "Propriété introuvable");
            return;
        }

        // Création de la réservation
        Booking::create([
            'user_id' => $user->id,
            'property_id' => $property->id,
            'start_date' => $this->date,
            'end_date' => $this->end_date ?: $this->date, // Utilise la date de fin si fournie
        ]);

        session()->flash('success', 'Réservation enregistrée pour ' . $user->name . ' du ' . $this->date . ' au ' . ($this->end_date ?: $this->date) . ' pour la propriété : ' . $property->name);
        $this->reset(['name', 'date', 'end_date', 'showForm', 'property']);
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}
