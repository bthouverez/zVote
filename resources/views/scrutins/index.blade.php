@extends('layouts.main')

@section('title', 'Les scrutins')

@section('content')

    <h1 class="text-5xl font-bold py-4">@yield('title')</h1>
    <h1 class="text-5xl font-bold py-4">{{ session('user_name') }}</h1>
    <table class="border border-gray-500 border-solid">
        <tr>
            {{--            <th class="border border-gray-500 border-solid p-4">Date</th>--}}
            <th class="border border-gray-500 border-solid p-4">Nom</th>
            {{--            <th class="border border-gray-500 border-solid p-4">Lieu</th>--}}
            <th class="border border-gray-500 border-solid p-4">Infos</th>

            @if(Auth::user())
                <th class="border border-gray-500 border-solid p-4">Résultats</th>
            @endif
        </tr>
        @foreach($scrutins as $s)
            <tr>
                {{--                <td class="border border-gray-500 border-solid p-4">{{ $s->date }}</td>--}}
                <td class="border border-gray-500 border-solid p-4">{{ $s->libelle }}</td>
                {{--                <td class="border border-gray-500 border-solid p-4">{{ $s->lieu }}</td>--}}
                <td class="border border-gray-500 border-solid p-4">
                    @if(App\Models\VotantScrutin::where(['votant_id' => session('user_id'), 'scrutin_id' => $s->id])->first())
                        Vous avez déjà voté
                    @else
                        <a href="/scrutins/{{ $s->id }}">
                            <button
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Voter
                            </button>
                        </a>
                    @endif
                </td>

                @if(Auth::user())
                    <td class="border border-gray-500 border-solid p-4">
                        <a href="/scrutins/{{ $s->id }}/resultats">
                            <button
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4  border border-blue-500 hover:border-transparent rounded">
                                Résultats
                            </button>
                        </a>
                    </td>
                @endif
            </tr>
        @endforeach

    </table>
    @if(Auth::user())
        <a href="/scrutins/creation">
            <button
                class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                +
            </button>
        </a>
    @endif

@endsection
