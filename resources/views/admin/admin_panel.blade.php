@extends('layout')
@section('main')

<div class="max-w-3xl mx-auto mt-8">
    <h1 class="text-3xl font-bold mb-6">Liste des utilisateurs</h1>

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-3">Id</th>
                <th class="border p-3">Nom</th>
                <th class="border p-3">Email</th>
                <th class="border p-3">Date de création</th>
                <th class="border p-3">Dernière modification</th>
                <th class="border p-3">Admin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="hover:bg-gray-100">
                    <td class="border p-3">{{$user->id}}</td>
                    <td class="border p-3">{{$user->name}}</td>
                    <td class="border p-3">{{$user->email}}</td>
                    <td class="border p-3">{{$user->created_at}}</td>
                    <td class="border p-3">{{$user->updated_at}}</td>
                    <td class="border p-3">{{$user->is_admin}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
