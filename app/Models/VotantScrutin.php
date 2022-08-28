<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotantScrutin extends Model
{
    use HasFactory;

    public function scrutin()
    {
        return $this->belongsTo(Scrutin::class);
    }

    public function votant()
    {
        return $this->belongsTo(Votant::class);
    }
}
