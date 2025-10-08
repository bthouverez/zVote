<div class="text-center">
    <h1 class="text-5xl font-bold py-4">{{ $scrutin->libelle }}</h1>

                <button wire:click="selectVote('oui')"
                        class="border border-solid border-4 border-gray-800 rounded p-5 m-2
                            bg-green-300 hover:bg-green-300
                        ">
                    OUI
                </button>
                <button wire:click="selectVote('non')"
                        class="border border-solid border-4 border-gray-800 rounded p-5 m-2
                            bg-red-500 hover:bg-green-300
                        ">
                    NON
                </button>

            @if($vote)
                <button wire:click="vote"
                    class="border border-solid border-4 border-gray-600 rounded p-5 m-2">Enregistrer mon vote
                </button>
            @endif
</div>
