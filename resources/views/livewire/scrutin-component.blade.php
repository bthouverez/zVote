<div class="text-center">
    <h1 class="text-5xl font-bold py-4">{{ $scrutin->libelle }}</h1>
    @if($scrutin->bloque)
        <p class="text-xl"><strong class="font-bold">{{ Str::upper($votant_scrutin_actuel->votant->nom) }} {{ $votant_scrutin_actuel->votant->prenom }}</strong>, a voté!</p>
        <p class="text-xs">Le scrutin est dorénavant bloqué jusqu'à ce que l'administrateur saisisse le mot de passe</p>
        <input wire:model="motdepasse"  wire:keydown.enter="unlock"
               class="border border-solid border-gray-800 rounded p-3 m-3"
               placeholder="Mot de passe" type="password"><br>
    @else

        @if($votant_scrutin_actuel)
            <p>Votant actuellement sélectionné
                <strong class="font-bold">{{ Str::upper($votant_scrutin_actuel->votant->nom) }} {{ $votant_scrutin_actuel->votant->prenom }}</strong>
            </p>
            <button wire:click="resetVotant"
                    class="border border-solid border-4 border-red-600 hover:bg-red-400 rounded p-2 hidden" >
                Ce n'est pas moi !
            </button>
        @else
            <p>Sélectionnez-vous dans la liste ci-dessous</p>
            <select  wire:model="votant_scrutin_actuel"
                     class="border border-solid border-gray-600 rounded text-lg">
                <option>Liste des votants...</option>
                @foreach($scrutin->votants as $votant)
                    <option value="{{ $votant->id }}">
                        {{ Str::upper($votant->nom) }} {{ $votant->prenom }}
                    </option>
                @endforeach
            </select>
        @endif

        <hr class="my-4">

        @if($votant_scrutin_actuel and $votant_scrutin_actuel->a_vote)
            <p>Un vote a déjà été enregistré pour
                <strong class="font-bold">
                    {{ Str::upper($votant_scrutin_actuel->votant->nom) }} {{ $votant_scrutin_actuel->votant->prenom }}
                </strong>
            </p>
        @else
            <h2 style="font-size: 1.5rem">Les candidats</h2>
            <ul class="flex justify-center">
                @foreach($scrutin->candidats as $candidat)
                    <li>
                        <button wire:click="selectCandidat({{ $candidat->id }})"
                        class="border border-solid border-4 border-gray-800 rounded p-5 m-2
                        @if(!$votant_scrutin_actuel)
                            bg-gray-600 hover:cursor-not-allowed
                        @elseif($candidat_selectionne_id == $candidat->id)
                            bg-green-600
                        @else
                            bg-gray-300 hover:bg-green-300
                        @endif
                        ">

                            {{ Str::upper($candidat->nom) }} {{ $candidat->prenom }}

                        </button>

                    </li>
                @endforeach
            </ul>

            @if($candidat_selectionne_id)
                <button wire:click="vote"
                    class="border border-solid border-4 border-gray-600 rounded p-5 m-2">Enregistrer mon vote
                </button>
            @endif
        @endif
    @endif
</div>
