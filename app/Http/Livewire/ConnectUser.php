<?php

namespace App\Http\Livewire;

use App\Models\Votant;
use Livewire\Component;

class ConnectUser extends Component
{
    public $votants;
    public $votant;

    public function mount()
    {
        $this->votants = Votant::all()->sortBy('nom');
        $this->votant = null;
    }

    public function confirmConnection($id)
    {
        $this->votant = Votant::find($id);
    }

    public function connectVotant()
    {
        // connecte l'utilisateur
        session()->put('user_id', $this->votant->id);
        session()->put('user_name', $this->votant->prenom.' '.$this->votant->nom[0]);
        return redirect('/scrutins');
    }

    public function resetVotant()
    {
        $this->votant = null;
    }

    public function render()
    {
        return view('livewire.connect-user');
    }
}
