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
    public $votant_scrutin_actuel;
    public $candidat_selectionne_id;

    public function mount(Scrutin $scrutin)
    {
        $this->scrutin = $scrutin;
        $this->votant_scrutin_actuel = null;
        $this->candidat_selectionne_id = null;
    }

    public function updated($name, $value)
    {
        if($name == 'votant_scrutin_actuel')
            $this->votant_scrutin_actuel = VotantScrutin::where('votant_id', $value)
                ->where('scrutin_id', $this->scrutin->id)->first();
    }

    public function resetVotant()
    {
        $this->votant_scrutin_actuel = null;
        $this->candidat_selectionne_id = null;
    }

    public function selectCandidat($candidat_id)
    {
        if(!$this->votant_scrutin_actuel) return;
        $this->candidat_selectionne_id = $candidat_id;
    }

    public function vote()
    {
        $this->votant_scrutin_actuel->a_vote = true;
        $this->votant_scrutin_actuel->save();

        $vs = VotantScrutin::where('votant_id', $this->candidat_selectionne_id)
            ->where('scrutin_id', $this->scrutin->id)->first();
        $vs->nb_votes++;
        $vs->save();
        return redirect('/scrutins/'.$this->scrutin->id);
    }

    public function render()
    {
        return view('livewire.scrutin-component');
    }


}
