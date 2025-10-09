<div class="text-center">
    <h1 class="text-5xl font-bold py-4">{{ $scrutin->libelle }}</h1>

                <button wire:click="selectVote('oui')"
                        class="border border-solid border-4 border-gray-800 rounded p-5 m-2 hover:bg-green-300 cursor-pointer w-20  {{ $vote == 'oui' ? 'bg-green-300' : '' }}
                        ">
                    OUI
                </button>
                <button wire:click="selectVote('non')"
                        class="border border-solid border-4 border-gray-800 rounded p-5 m-2 hover:bg-green-300 cursor-pointer w-20 {{ $vote == 'non' ? 'bg-green-300' : '' }}
                        ">
                    NON
                </button>

                <button wire:click="vote"
                    class="border border-solid border-4 border-gray-600 rounded p-5 m-2 cursor-pointer disabled:bg-gray-500 hover:bg-green-500" {{ $vote == '' ? 'disabled' : '' }}>Enregistrer mon vote
                </button>
</div>
