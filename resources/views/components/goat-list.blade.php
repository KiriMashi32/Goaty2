@extends('layout')

@section('main')
    <div class="py-4">
        <h1 class="text-3xl font-bold mb-4">La liste de mes goats</h1>


<table class="w-full mt-4 border">
    <thead>
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
        @foreach (Auth::user()->goats as $goat)
            <tr>
                <x-td>{{$goat->id}}</x-td>
                <x-td>{{$goat->sex ? 'Femelle' : 'Male'}}</x-td>
                <x-td>{{$goat->name}}</x-td>
                <x-td>{{$goat->birthday}}</x-td>
                <x-td>
                    <div class="w-6 h-6" style="background-color: {{$goat->color}};"></div>
                </x-td>
                <x-td >{{$goat->price}}</x-td>
                <x-td >
                    <!-- Bouton pour voir la chevre -->
                    <a href="/goats/{{$goat->id}}" class="bg-green-500 text-white py-1 px-2 rounded">Voir</a>
                    <!-- Bouton de suppression -->
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
@endsection

