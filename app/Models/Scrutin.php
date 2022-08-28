<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrutin extends Model
{
    use HasFactory;

    public function votants_scrutin()
    {
        return $this->hasMany(VotantScrutin::class);
    }

    public function candidats_scrutin()
    {
        return $this->hasMany(VotantScrutin::class)->where('candidat', true);
    }

    public function votants()
    {
        return $this->hasManyThrough(Votant::class, VotantScrutin::class, 'scrutin_id', 'id', 'id', 'votant_id');
    }

    public function candidats()
    {
        return $this->hasManyThrough(Votant::class, VotantScrutin::class, 'scrutin_id', 'id', 'id', 'votant_id')
            ->where('candidat', 1);
    }
}
