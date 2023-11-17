@extends('layout')
@section('main')

<div class="bg-purple-500">
    <body>
        <h1>Just one goat</h1>
        <img src="/img/{{$goat->image_path}}" alt="image de chèvre">
        <a href='/goats/{{$goat->id}}/edit'>Modifier {{$goat->name}} </a>
        <ul>
            <li>{{$goat->id}}</li>
            <li>{{$goat->sex ? 'Femelle' : 'Male'}}</li>
            <li>{{$goat->name}}</li>
            <li>{{$goat->birthday}}</li>
            <li>{{$goat->color}}</li>
            <li>{{$goat->price}}</li>
        </ul>
        <a href="/goats">All the goats</a>
    
    </body>
</div>

@endsection