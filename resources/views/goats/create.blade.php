@section('main')
    @extends('layout')

    <!DOCTYPE html>

    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Make a goat</h1>

        <form method="post" action="/goats">
            @csrf
            <input type="checkbox" name="sex"><br>
            <input type="text" placeholder="nom" name="name" value="{{ old('name') }}"><br>
            @error('name') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror

            <input type="number" placeholder="prix" name="price" value="{{ old('price') }}"><br>
            @error('price') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror

            <input type="text" placeholder="couleur" name="color" value="{{ old('color') }}"><br>
            @error('color') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror

            <input type="date" placeholder="birthday" name="birthday" value="{{ old('birthday') }}"><br>
            @error('birthday') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror

            <button>Valider</button>
        </form>
    </body>
    </html>
@endsection
