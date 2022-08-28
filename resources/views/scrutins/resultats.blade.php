@extends('layouts.main')

@section('title', 'Les résultats')

@section('content')
    <div class="text-center">
        <h1 class="text-5xl font-bold pt-4">Résultats</h1>
        <h2 class="text-2xl font-bold py-4">{{ $scrutin->libelle }}</h2>
        <p>Nombre total de votes : {{ $candidats->map->nb_votes->sum() }}</p>
        <hr class="my-4">
        <table class="m-auto">
            @foreach($candidats as $candidat)
            <tr>
                <td class="p-3">{{ number_format($candidat->nb_votes/$candidats->map->nb_votes->sum() * 100, 2) }} %</td>
                <td class="p-3">{{ Str::upper($candidat->votant->nom) }} {{ $candidat->votant->prenom }}</td>
                <td class="p-3">{{ $candidat->nb_votes }} vote(s)</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
