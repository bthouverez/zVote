<?php

namespace App\Http\Controllers;

use App\Models\Scrutin;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $s = new Scrutin();
        $s->lieu = $request->lieu;
        $s->libelle = $request->libelle;
        $s->date = $request->date;
        $s->save();
        return redirect('/scrutins/'.$s->id);
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
        $candidats = $scrutin->candidats_scrutin->sortByDesc('nb_votes');
        return view('scrutins.resultats', compact('candidats'));
    }

    public function controle(Scrutin $scrutin)
    {
        $votes_non_candidat = $scrutin->votants_scrutin->where('scrutin_id', $scrutin->id)
            ->where('a_vote', true)->where('candidat', false)->sortByDesc('updated_at');
        $votes_candidat = $scrutin->votants_scrutin->where('scrutin_id', $scrutin->id)->where('candidat', true);
        return view('scrutins.controle', compact('votes_non_candidat'), compact('votes_candidat'));
    }
}
