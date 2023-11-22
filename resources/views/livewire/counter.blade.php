<div class="max-w-md mx-auto p-4 bg-gray-200 rounded-lg shadow-lg">
    <!-- User Section -->
    <div class="mb-4">
        <input wire:model.live="username" type="text" class="p-2 border border-gray-300 rounded-md w-full mb-2">
        <p class="text-lg font-semibold">Le counter de {{$username}}</p>
        <div class="flex items-center justify-between">
            <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded-md mr-2">-</button>
            <span class="text-xl font-bold">{{$count}}</span>
            <button wire:click="increment" class="px-4 py-2 bg-green-500 text-white rounded-md ml-2">+</button>
        </div>
    </div>

    <input wire:model="name" type="text">
    <input wire:model="price" type="number">
    <x-button wire:click="add">Ajouter</x-button>
    <!-- Goats Table -->
    <table class="w-full mt-4 border">
        <thead class="bg-gray-300">
            <tr>
                <x-th>Id</x-th>
                <x-th>Sexe</x-th>
                <x-th>Nom</x-th>
                <x-th>Date de naissance</x-th>
                <x-th>Couleur</x-th>
                <x-th>Prix</x-th>
                <x-th>Actions</x-th>
            </tr>
        </thead>
        <tbody>
            @foreach ($goats as $goat)
                <tr class="hover:bg-gray-100">
                    <x-td>{{$goat->id}}</x-td>
                    <x-td>{{$goat->sex ? 'Femelle' : 'Male'}}</x-td>
                    <x-td>{{$goat->name}}</x-td>
                    <x-td>{{$goat->birthday}}</x-td>
                    <x-td>
                        <div class="w-6 h-6" style="background-color: {{$goat->color}};"></div>
                    </x-td>
                    <x-td>{{$goat->price}}</x-td>
                    <x-td>
                        <!-- View Goat Button -->
                        <a href="/goats/{{$goat->id}}" class="bg-green-500 text-white py-1 px-2 rounded">Voir</a>
                        <!-- Delete Goat Button -->
                        <form method="post" action="/goats/{{$goat->id}}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Supprimer</button>
                        </form>
                    </x-td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
