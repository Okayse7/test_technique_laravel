<div class="bg-white shadow-md rounded-lg p-4">
    <img src="{{ $property->image ?? 'https://via.placeholder.com/300x200' }}" alt="Image du bien" class="w-40 h-28 object-cover rounded mb-3 mx-auto">
    <h3 class="text-xl font-bold text-primary">{{ $property->name }}</h3>
    <p class="text-sm text-gray-600 mb-2">{{ $property->description }}</p>
    <p class="text-lg font-semibold text-secondary">{{ $property->price_per_night }} € / nuit</p>
    <div class="mt-4 flex justify-center">
        <x-reservation-button :property="$property" />
    </div>
</div>
