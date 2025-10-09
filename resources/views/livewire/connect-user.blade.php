<div>
    @if($votant)
        <div class="text-center my-24 flex items-center flex-col">
            <p class="text-xl">Êtes vous certain d'être {{ $votant->prenom }} {{ $votant->nom }} ?</p>
            <p class="text-xl">Vous ne pourrez pas modifier ce choix !</p>
            <button wire:click="connectVotant" class="w-24 h-24 bg-green-400 px-4 py-2 rounded m-4 cursor-pointer">OUI</button>
            <button wire:click="resetVotant" class="w-24 h-24 bg-red-400 px-4 py-2 rounded m-4 cursor-pointer">NON</button>
        </div>
    @else
        <table class="border-spacing-2 gap-4 w-full">

            @foreach($votants as $votant)
                <tr class="my-4 border">
                    <td class="p-4">{{ $votant->nom }}</td>
                    <td class="p-4">{{ $votant->prenom }}</td>
                    <td class="p-4">
                        <button wire:click="confirmConnection({{ $votant->id }})"
                                class="bg-green-600 px-4 py-2 rounded cursor-pointer"
                        >Connexion
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</div>

