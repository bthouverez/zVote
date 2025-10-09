<?php

namespace App\Http\Livewire;

use App\Models\Scrutin;
use App\Models\Votant;
use App\Models\VotantScrutin;
use Livewire\Component;

class ScrutinComponent extends Component
{
    protected $listeners = ['refresh' => '$refresh'];
    public $scrutin;
    public $vote;

    public function mount(Scrutin $scrutin)
    {
        $this->scrutin = $scrutin;
        $this->vote = "";
    }

    public function resetVotant()
    {
        $this->votant_scrutin_actuel = null;
        $this->candidat_selectionne_id = null;
    }

    public function selectVote($vote)
    {
        $this->vote = $vote;
    }

    public function vote()
    {
        $vs = new VotantScrutin;
        $vs->votant_id = session('user_id');
        $vs->scrutin_id = $this->scrutin->id;
        $vs->vote = $this->vote == 'oui';
        $vs->save();

        $this->scrutin->bloque = true;
        $this->scrutin->save();
        return redirect('/scrutins/');
    }

    public function unlock()
    {
        if($this->motdepasse == env('DB_PASSWORD')) {
            $this->scrutin->bloque = false;
            $this->scrutin->save();
            $this->resetVotant();
        }
        $this->motdepasse = '';
    }

    public function render()
    {
        return view('livewire.scrutin-component');
    }


}
