@extends('layout')
@section('main')

<div class="bg-purple-500 min-h-screen flex items-center justify-center" style="background-color: {{$goat->color}};">
    <div class="text-center text-white">
        <h1 class="text-4xl font-bold mb-4">Just one goat</h1>
        <img src="/img/{{$goat->image_path}}" alt="image de chèvre" class="mb-4 rounded-lg">
        <a href='/goats/{{$goat->id}}/edit' class="text-yellow-300 hover:text-yellow-500">Modifier {{$goat->name}} </a>
        <ul class="text-lg list-disc list-inside mt-4">
            <li><strong>Id : </strong> {{$goat->id}}</li>
            {{-- <li><strong>Proprio : </strong>{{App\Models\User::find($goat->user_id)->name}} </li> --}}
            <li><strong>Proprio : </strong>{{$goat->owner->name}}</li>
            <li><strong>Sexe : </strong> {{$goat->sex ? 'Femelle' : 'Male'}}</li>
            <li><strong>Nom : </strong> {{$goat->name}}</li>
            <li><strong>Date de naissance : </strong> {{$goat->birthday}}</li>
            <li><strong>Couleur : </strong> {{$goat->color}}</li>
            <li><strong>Prix : </strong> {{$goat->price}}</li>
        </ul>
        <a href="/dashboard" class="text-yellow-300 hover:text-yellow-500 block mt-4">All the goats</a>
    </div>
</div>

@endsection
