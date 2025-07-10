<div>
    {{-- Message de succès si la réservation a bien marché --}}
    @if (session()->has('success')) 
        <div class="bg-green-200 text-green-800 p-2 mb-2 rounded"> 
            {{ session('success') }}
        </div>
    @endif

    {{-- Apparition du formulaire si on clique sur le bouton Réserver d'une des propriétés --}}
    @if($showForm)
        <div class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded shadow-lg w-full max-w-sm relative">
                <button wire:click="$set('showForm', false)" class="absolute top-2 right-2 text-gray-500 hover:text-black">&times;</button>
                <h2 class="text-xl font-bold mb-4">Réserver :</h2>
                <form wire:submit.prevent="submit" class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 mt-2">Date de début</label>{{-- Les dates à inscrire --}}
                    <input type="date" wire:model="date" class="border p-1 rounded w-full">
                    <label class="block text-sm font-medium text-gray-700 mt-2">Date de fin</label>
                    <input type="date" wire:model="end_date" class="border p-1 rounded w-full" placeholder="Date de fin">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Réserver</button>
                </form>
            </div>
        </div>
    @endif
</div>
