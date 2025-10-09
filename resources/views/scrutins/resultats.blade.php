@extends('layouts.main')

@section('title', 'Les résultats')

@section('content')
    <div class="text-center">
        <h1 class="text-5xl font-bold pt-4">Résultats</h1>
        <h2 class="text-2xl font-bold py-4">{{ $scrutin->libelle }}</h2>
        <p>Nombre total de votes : {{ $scrutin->votants_scrutin->count() }}</p>
        <hr class="my-4">
        @php
            $array = $scrutin->votants_scrutin->map->vote->toArray();
            // Compter les occurrences de chaque valeur
            $counts = array_count_values($array);

            // Récupérer le nombre de 0 et de 1
            $nonVotes = $counts[0] ?? 0;
            $ouiVotes = $counts[1] ?? 0;

        @endphp
        <p>Résolution acceptée : {{ $ouiVotes > $nonVotes ? 'OUI' : 'NON' }}</p>
        <br>
        <p> OUI : {{ $ouiVotes }}, NON : {{ $nonVotes }}</p>

    </div>
@endsection
