@extends('layouts.main')

@section('title', 'Selection votant')

@section('content')
    <table class="border-spacing-2 gap-4">
        @foreach($votants as $votant)
        <tr class="my-4 border">
            <td class="p-4">{{ $votant->nom }}</td>
            <td class="p-4">{{ $votant->prenom }}</td>
            <td class="p-4">
                <form action="/userConnect/{{ $votant->id }}" method="POST">
                    @csrf
                    <button class="bg-green-600 px-4 py-2 rounded">Connexion</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
