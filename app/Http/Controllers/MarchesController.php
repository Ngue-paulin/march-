<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marche;
use App\User;
use App\Prestataire;

class MarchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $marché = Marche::all();

        return view('marché.listes_marche', compact('marché') , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $users = User::all();
       return view('marché.nouveau_marche' , compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

      $validatedData = $request->validate([
            'reference' => 'required|string|unique:marches',
            'secteur_marche' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'statut' => 'required|string|max:255',
            'maitre_oeuvre' => 'required|string|max:255',
            'type_marche' => 'required|string|max:255',
            'montant' => 'required|Integer',
            'delai_livreson' => 'required|string',
            'lieu_livreson' => 'required|string',
            'financement' => 'required|string',
            'imputation' => 'required|string',
            'description' => 'required|string|max:200',
            'date_livréson' => 'required|date',
            'user_id' => 'required|Integer',
            //'prestataire_id' => 'Integer'
    ]);

      Marche::create([
        'reference' => $request->reference,
        'secteur_marche' => $request->secteur_marche,
        'date_debut' => $request->date_debut,
        'date_fin' => $request->date_fin,
        'statut' => $request->statut,
        'maitre_oeuvre' => $request->maitre_oeuvre,
        'type_marche' => $request->type_marche,
        'montant' => $request->montant,
        'delai_livreson' => $request->delai_livreson,
        'lieu_livreson' => $request->lieu_livreson,
        'financement' => $request->financement,
        'imputation' => $request->imputation,
        'date_livréson' => $request->date_livréson,
        'description' => $request->description,
        'user_id' => $request->user_id,
       // 'prestataire_id' => $request->prestataire_id,

       ]);
         return redirect()->route('marches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */


    public function show($id)
    {
        $marché =  Marche::findOrfail($id);
        return view('marché.detail_marche' , compact('marché'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        //dd('edit');
        $marché =  Marche::findOrfail($id);
        return view('marché.modifier' , compact('marché'), compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'reference' => 'required|string',
            'secteur_marche' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'statut' => 'required|string|max:255',
            'maitre_oeuvre' => 'required|string|max:255',
            'type_marche' => 'required|string|max:255',
            'montant' => 'required|Integer',
            'delai_livreson' => 'required|string',
            'lieu_livreson' => 'required|string',
            'financement' => 'required|string',
            'imputation' => 'required|string',
            'description' => 'required|string|max:200',
            'date_livréson' => 'required|date',
            'user_id' => 'required|Integer',
            //'prestataire_id' => 'Integer'
    ]);

    $marché =  Marche::findOrfail($id);
    $marché->update([
        'reference' => $request->reference,
        'secteur_marche' => $request->secteur_marche,
        'date_debut' => $request->date_debut,
        'date_fin' => $request->date_fin,
        'statut' => $request->statut,
        'maitre_oeuvre' => $request->maitre_oeuvre,
        'type_marche' => $request->type_marche,
        'montant' => $request->montant,
        'delai_livreson' => $request->delai_livreson,
        'lieu_livreson' => $request->lieu_livreson,
        'financement' => $request->financement,
        'imputation' => $request->imputation,
        'date_livréson' => $request->date_livréson,
        'description' => $request->description,
        'user_id' => $request->user_id,
       // 'prestataire_id' => $request->prestataire_id,

       ]);
         return redirect()->route('marches.show' , $marché);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Marche::destroy($id);
       return redirect()->route('marches.index');
    }

}
