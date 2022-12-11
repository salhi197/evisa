<?php

namespace App\Http\Controllers;

use App\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = Demande::all();
        return view('demandes.index',compact('demandes'));
    }


    public function acceptGr($id_demande)
    {
        $demande = Demande::find($id_demande);
        $demande->etat_gr = 1;
        $demande->save();
        return redirect()->back()->with('success', 'Inséré avec succés ');
    }

    public function acceptPolice($id_demande)
    {
        $demande = Demande::find($id_demande);
        $demande->etat_police = 1;
        $demande->save();
        return redirect()->back()->with('success', 'Inséré avec succés ');
    }


    public function sendGr($id_demande)
    {
        $demande = Demande::find($id_demande);
        $demande->gr = 1;
        $demande->save();
        return redirect()->back()->with('success', 'Inséré avec succés ');
    }

    public function sendPolice($id_demande)
    {
        $demande = Demande::find($id_demande);
        $demande->police = 1;
        $demande->save();
        return redirect()->back()->with('success', 'Inséré avec succés ');
    }


    public function gr()
    {
        $demandes = Demande::where('gr',1)->get();
        return view('demandes.gr',compact('demandes'));
    }

    public function police()
    {
        $demandes = Demande::where('police',1)->get();
        return view('demandes.police',compact('demandes'));
    }

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

        $demande->gr = false;;
        $demande->police = false;;

        $demande->nom_prenom_mere = $request['nom_prenom_mere'];
        $demande->passport = $request['passport'];
        $demande->naissance_pere = $request['naissance_pere'];
        $demande->naissance_mere = $request['naissance_mere'];

        $demande->save();
        return redirect()->route('welcome')->with('success', 'Inséré avec succés ');

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

    public function accept($id_demande)
    {
        $demande = Demande::find($id_demande);
        $demande->gr = 1;
        $demande->save();
        return redirect()->back()->with('success', 'Inséré avec succés ');
    }

    public function destroy($demande)
    {
        //
    }
}
