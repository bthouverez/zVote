@extends('layouts.main')

@section('title', 'Les scrutins')

@section('content')
    <div class="m-2">
        @if(session('info'))
            <p>{{ session('info') }}</p>
        @endif
        <h2 class="text-2xl text-center font-bold py-4">Bonjour {{ session('user_name') }}</h2>
        <p class="text-center">Les différentes résolutions à voter apparaîtront ici</p>
        <p>
            <a href="/scrutins"><button class="my-4 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Recharger la page
                </button></a>
        </p>
        <table class="border border-gray-500 border-solid w-full">
            <tr>
                {{--            <th class="border border-gray-500 border-solid p-4">Date</th>--}}
                <th class="border border-gray-500 border-solid p-4">Résolution</th>
                {{--            <th class="border border-gray-500 border-solid p-4">Lieu</th>--}}
                <th class="border border-gray-500 border-solid p-4">Infos</th>

                @if(Auth::user())
                    <th class="border border-gray-500 border-solid p-4">Résultats</th>
                @endif
            </tr>
            @forelse($scrutins as $s)
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
            @empty
                <tr>
                    <td colspan="4" class="border border-gray-500 border-solid p-4 text-center">Aucun scrutin
                        disponible actuellement
                    </td>
                </tr>
            @endforelse

        </table>
        @if(Auth::user())
            <a href="/scrutins/create">
                <button
                    class="bg-transparent my-4 hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                    Ajouter un scrutin
                </button>
            </a>
            <form method="post" action="addVotant" class="my-4">
                @csrf
                <input class="border py-2 my-2" name="newPrenom" placeholder="Prenom"><br>
                <input class="border py-2 my-2" name="newNom" placeholder="Nom"><br>
                <button
                    class="bg-transparent my-4 hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                    Ajouter votant
                </button>
            </form>
        @endif
    </div>

@endsection
