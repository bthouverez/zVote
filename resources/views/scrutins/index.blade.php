@extends('layouts.main')

@section('title', 'Les scrutins')

@section('content')

    <h1>Tous les tournois</h1>
    <table class="border border-gray-500 border-solid">
        <tr>
            <th class="border border-gray-500 border-solid p-4">Date</th>
            <th class="border border-gray-500 border-solid p-4">Nom</th>
            <th class="border border-gray-500 border-solid p-4">Lieu</th>
            <th class="border border-gray-500 border-solid p-4"></th>
        </tr>
        @foreach($scrutins as $s)
            <tr>
                <td class="border border-gray-500 border-solid p-4">{{ $s->date }}</td>
                <td class="border border-gray-500 border-solid p-4">{{ $s->libelle }}</td>
                <td class="border border-gray-500 border-solid p-4">{{ $s->lieu }}</td>
                <td class="border border-gray-500 border-solid p-4">
                    <a href="/scrutins/{{ $s->id }}">
                        <button
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Voir
                        </button>
                    </a>
                </td>
            </tr>

        @endforeach
        <tr>
            <td class="border border-gray-500 border-solid p-4" colspan="3">Créer un scrutin</td>
            <td class="border border-gray-500 border-solid p-4">
                <a href="/scrutins/create">
                    <button
                        class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                        +
                    </button>
                </a>
            </td>
        </tr>

    </table>
@endsection
