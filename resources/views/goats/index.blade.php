@extends('layout')
@section('main')
    <div class="py-4">
        <h1 class="text-3xl font-bold mb-4">All the goats</h1>
        <a href="/goats/create" class="bg-blue-500 text-white py-2 px-4 rounded">Nouvelle Goat</a>

        <table class="w-full mt-4 border">
            <thead>
                <tr>
                    <th class="border">Id</th>
                    <th class="border">Sexe</th>
                    <th class="border">Nom</th>
                    <th class="border">Date de naissance</th>
                    <th class="border">Couleur</th>
                    <th class="border">Prix</th>
                    <th class="border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($goats as $goat)
                    <tr>
                        <td class="border">{{$goat->id}}</td>
                        <td class="border">{{$goat->sex ? 'Femelle' : 'Male'}}</td>
                        <td class="border">{{$goat->name}}</td>
                        <td class="border">{{$goat->birthday}}</td>
                        <td class="border">
                            <div class="w-6 h-6" style="background-color: {{$goat->color}};"></div>
                        </td>
                        <td class="border">{{$goat->price}}</td>
                        <td class="border">
                            <!-- Bouton pour voir la chevre -->
                            <a href="/goats/{{$goat->id}}" class="bg-green-500 text-white py-1 px-2 rounded">Voir</a>
                            <!-- Bouton de suppression -->
                            <form method="post" action="/goats/{{$goat->id}}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
