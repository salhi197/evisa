<?php

namespace App\Http\Controllers;

use App\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandes = Demande::all();
        return view('demandes.index',compact('demandes'));

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demande = new Demande();
        $demande->nom = $request['nom'];
        $demande->prenom = $request['prenom'];
        $demande->naissance = $request['naissance'];
        $demande->lieu = $request['lieu'];
        $demande->telephone = $request['telephone'];
        $demande->email = $request['email'];
        $demande->pays = $request['pays'];
        $demande->adress = $request['adress'];
        $demande->situation = $request['situation'];
        $demande->pere = $request['pere'];
        $demande->nom_prenom_mere = $request['nom_prenom_mere'];
        $demande->passport = $request['passport'];
        $demande->naissance_pere = $request['naissance_pere'];
        $demande->naissance_mere = $request['naissance_mere'];

        $demande->save();
        return redirect()->route('demande.index')->with('success', 'Inséré avec succés ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show($demande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit($demande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_demande)
    {
        $demande = Demande::find($id_demande);
        $demande = new Demande();
        $demande->nom = $request['nom'];
        $demande->prenom = $request['prenom'];
        $demande->naissance = $request['naissance'];
        $demande->lieu = $request['lieu'];
        $demande->telephone = $request['telephone'];
        $demande->email = $request['email'];
        $demande->pays = $request['pays'];
        $demande->adress = $request['adress'];
        $demande->situation = $request['situation'];
        $demande->pere = $request['pere'];
        $demande->nom_prenom_mere = $request['nom_prenom_mere'];
        $demande->passport = $request['passport'];
        $demande->naissance_pere = $request['naissance_pere'];
        $demande->naissance_mere = $request['naissance_mere'];

        $demande->save();
        return redirect()->route('demande.index')->with('success', 'Inséré avec succés ');

    }


    public function destroy($demande)
    {
        //
    }
}
