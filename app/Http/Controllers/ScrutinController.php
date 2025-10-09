<?php

namespace App\Http\Controllers;

use App\Models\Scrutin;
use App\Models\Votant;
use App\Models\VotantScrutin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScrutinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $scrutins = Scrutin::all()->sortBy('date');
        return view('scrutins.index', compact('scrutins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('scrutins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $s = new Scrutin();
        $s->libelle = $request->libelle;
        $s->date = $request->date;
        $s->save();


        return redirect('/scrutins/');
//        return redirect('/scrutins/'.$s->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scrutin  $scrutin
     * @return \Illuminate\Http\Response
     */
    public function show(Scrutin $scrutin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scrutin  $scrutin
     * @return \Illuminate\Http\Response
     */
    public function edit(Scrutin $scrutin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scrutin  $scrutin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scrutin $scrutin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scrutin  $scrutin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scrutin $scrutin)
    {
        //
    }

    public function resultats(Scrutin $scrutin)
    {
        return view('scrutins.resultats',  compact('scrutin'));
    }

    public function controle(Scrutin $scrutin)
    {
        $votes_non_candidat = $scrutin->votants_scrutin->where('scrutin_id', $scrutin->id)
            ->where('a_vote', true)->where('candidat', false)->sortByDesc('updated_at');
        $votes_candidat = $scrutin->votants_scrutin->where('scrutin_id', $scrutin->id)->where('candidat', true);
        return view('scrutins.controle', compact('votes_non_candidat'), compact('votes_candidat'));
    }


    public function userSelect()
    {
        $votants = Votant::all();
        return view('select-user', compact('votants'));
    }



    public function createVote(Scrutin $scrutin)
    {
        return view('scrutins.vote', compact('scrutin'));
    }
}
