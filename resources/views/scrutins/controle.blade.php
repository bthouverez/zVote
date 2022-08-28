@extends('layouts.main')

@section('title', 'Controle')

@section('content')
    <div class="flex justify-around">
        <table>
            <tr>
                <th>Votant</th>
                <th>Date vote</th>
            </tr>
            @foreach($votes_non_candidat as $vote)
                <tr>
                    <td class="p-3">{{ Str::upper($vote->votant->nom) }} {{ $vote->votant->prenom }}</td>
                    <td class="p-3">{{ $vote->updated_at }}</td>
                </tr>
            @endforeach
        </table>
        <table class="self-start">
            <tr>
                <th>Candidat</th>
                <th>A voté</th>
            </tr>
            @foreach($votes_candidat as $vote)
                <tr>
                    <td class="p-3">{{ Str::upper($vote->votant->nom) }} {{ $vote->votant->prenom }}</td>
                    <td class="p-3">{{ $vote->a_vote ? 'Oui' : 'Non' }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
