@extends('layouts.main')

@section('title', 'Les résultats')

@section('content')
    <p>Nombre total de votes : {{ $candidats->map->nb_votes->sum() }}</p>
    <table>
        @foreach($candidats as $candidat)
        <tr>
            <td class="p-3">{{ Str::upper($candidat->votant->nom) }} {{ $candidat->votant->prenom }}</td>
            <td class="p-3">{{ $candidat->nb_votes }} vote(s)</td>
        </tr>
        @endforeach
    </table>
@endsection
