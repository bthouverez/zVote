@extends('layouts.main')

@section('title', 'Création de scrutin')

@section('content')

    <h1 class="text-5xl font-bold py-4">@yield('title')</h1>

    <form action="/scrutins" method="post">
        @csrf
        <input class="border border-solid border-gray-800 rounded p-3 m-3"
               placeholder="Libellé" type="text" name="libelle"><br>
        <input class="border border-solid border-gray-800 rounded p-3 m-3"
               placeholder="Date" type="date" name="date"><br>
        <input class="border border-solid border-gray-800 rounded p-3 m-3"
               placeholder="Lieu" type="text" name="lieu"><br>
        <select class="border border-solid border-gray-800 rounded p-3 m-3 h-60"
                name="candidats[]" multiple>
            @foreach($votants as $votant)
                <option value="{{ $votant->id }}">
                    {{ Str::upper($votant->nom) }} {{ $votant->prenom }}
                </option>
            @endforeach
        </select><br>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-3">
            Créer
        </button>
    </form>

@endsection
