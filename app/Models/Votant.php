<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votant extends Model
{
    use HasFactory;

    public function scrutins_votant()
    {
        return $this->hasMany(VotantScrutin::class);
    }
}
