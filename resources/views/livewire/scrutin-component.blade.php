<div class="text-center">
    <h1 class="my-4 text-5xl font-bold py-4">{{ $scrutin->libelle }}</h1>
    <p class="text-xl my-4">Acceptez-vous cette résolution ?</p>
        <div class="flex flex-col">
            <button wire:click="selectVote('oui')"
                    class="border-solid border-4 border-gray-800 rounded p-5 m-2 hover:bg-green-300 cursor-pointer {{ $vote == 'oui' ? 'bg-green-300' : '' }}
                ">
                OUI
            </button>
            <button wire:click="selectVote('non')"
                    class="border-solid border-4 border-gray-800 rounded p-5 m-2 hover:bg-green-300 cursor-pointer {{ $vote == 'non' ? 'bg-green-300' : '' }}
                ">
                NON
            </button>
                <br><br>
            <button wire:click="vote"
                    class="border-solid border-4 border-gray-600 rounded p-5 m-2 cursor-pointer disabled:bg-gray-500 hover:bg-green-500" {{ $vote == '' ? 'disabled' : '' }}>Enregistrer mon vote
            </button>
        </div>
</div>
