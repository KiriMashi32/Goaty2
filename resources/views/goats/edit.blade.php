@section('main')
@extends('layout')

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Change a goat</title>
    </head>
    <body>
        <h1>Change a goat</h1>

        <form method="post" action="/goats/{{ $goat->id }}">
            @csrf
            @method('PATCH') <!-- Utilisez la méthode PATCH pour la mise à jour -->

            <input type="checkbox" name="sex" {{ $goat->sex ? 'checked' : '' }}>
            <input type="text" placeholder="nom" name="name" value="{{ $goat->name }}">
            <input type="number" placeholder="prix" name="price" value="{{ $goat->price }}">
            <input type="text" placeholder="couleur" name="color" value="{{ $goat->color }}">
            <input type="date" placeholder="birthday" name="birthday" value="{{ $goat->birthday }}">

            <button>Valider</button>
        </form>
    </body>
    </html>
@endsection
