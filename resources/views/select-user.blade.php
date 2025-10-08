@extends('layouts.main')

@section('title', 'Selection votant')

@section('content')
    <table>
        @foreach($votants as $votant)
        <tr>
            <td>{{ $votant->nom }}</td>
            <td>{{ $votant->prenom }}</td>
            <td>
                <form action="/userConnect/{{ $votant->id }}" method="POST">
                    @csrf
                    <button>Connexion</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
