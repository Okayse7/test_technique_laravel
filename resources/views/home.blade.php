@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2 class="text-2xl font-semibold mb-4">Liste des propriétés</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($properties as $property)
            @include('components.property-card', ['property' => $property])
        @endforeach
    </div>
    <livewire:booking-manager />

@endsection
