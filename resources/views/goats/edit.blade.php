@extends('layout')
@section('main')

<div class="bg-purple-500 min-h-screen flex items-center justify-center" style="background-color: {{$goat->color}};">
    <div class="text-center text-white">
        <h1 class="text-4xl font-bold mb-4">Change a goat</h1>

        <form method="post" action="/goats/{{ $goat->id }}" class="max-w-md mx-auto">
            @csrf
            @method('PATCH')

            <div class="mb-4">
                <label class="block text-gray-700">
                    <input type="checkbox" name="sex" {{ $goat->sex ? 'checked' : '' }} class="mr-2">
                    Sexe
                </label>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Nom</label>
                <input type="text" placeholder="Nom" name="name" value="{{ $goat->name }}" class="border p-2 w-full text-black">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Prix</label>
                <input type="number" placeholder="Prix" name="price" value="{{ $goat->price }}" class="border p-2 w-full text-black">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Couleur</label>
                <input type="text" placeholder="Couleur" name="color" value="{{ $goat->color }}" class="border p-2 w-full text-black">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Date de naissance</label>
                <input type="date" placeholder="Date de naissance" name="birthday" value="{{ $goat->birthday }}" class="border p-2 w-full text-black">
            </div>

            <button class="bg-blue-500 text-white py-2 px-4 rounded">Valider</button>
        </form>
    </div>
</div>

@endsection
