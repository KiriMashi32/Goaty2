@extends('layout')

@section('main')
    <div class="py-4">
        <h1 class="text-3xl font-bold mb-4">Make a goat</h1>

        <form method="post" action="/goats" class="max-w-md mx-auto">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Sexe</label>
                <input type="checkbox" name="sex" class="mt-2">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Nom</label>
                <input type="text" placeholder="Nom" name="name" value="{{ old('name') }}" class="border p-2 w-full">
                @error('name') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Prix</label>
                <input type="number" placeholder="Prix" name="price" value="{{ old('price') }}" class="border p-2 w-full">
                @error('price') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <!-- Custom Color Picker -->
            <div class="mb-4">
                <label for="color-picker" class="block text-gray-700">Choisi une couleur :</label>
                <input id="color-picker" type="color">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Date de naissance</label>
                <input type="date" placeholder="Date de naissance" name="birthday" value="{{ old('birthday') }}" class="border p-2 w-full">
                @error('birthday') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <button class="bg-blue-500 text-white py-2 px-4 rounded">Valider</button>
        </form>

        <!-- Custom Color Picker -->
        {{-- <div id="image-container">
            <img id="image" src="image.jpg">
        </div>
    </div> --}}

    <script>
        const colorPicker = document.getElementById("color-picker");
        const image = document.getElementById("image");

        colorPicker.addEventListener("input", function() {
            image.style.filter = `hue-rotate(${this.value}deg)`;
        });
    </script>
@endsection
