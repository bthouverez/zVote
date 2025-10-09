@extends('layouts.main')

@section('title', 'Création de scrutin')

@section('content')

    <h1 class="text-5xl font-bold py-4">@yield('title')</h1>

    <form action="/scrutins" method="post">
        @csrf
        <input class="border border-solid border-gray-800 rounded p-3 m-3"
               value="{{ date('Y-m-d') }}" type="date" name="date"><br>
        <input class="border border-solid border-gray-800 rounded p-3 m-3"
               placeholder="Libellé" type="text" name="libelle"><br>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-3">
            Créer
        </button>
    </form>

@endsection
