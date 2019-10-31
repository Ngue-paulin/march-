<?php

namespace App\Http\Controllers;

use App\Prestataire;
use Illuminate\Http\Request;

class PrestataireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $prestataire = Prestataire::all();
       dd($prestataire);
        //return view('prestataire.liste', compact('prestataire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestataire.inscription');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
            'nom' => 'required|string',
            'statut_juridique' => 'required|string',
            'entreprise' => 'string|max:255',
            'responsable' => 'string|max:255',
            'profession' => 'string|max:255',
            'secteur_activite' => 'required|string',
            'tel' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'cni' => 'required|string|max:255',
            'ville' => 'required|string',
            'boite_postale' => 'required|string',
            'numero_contrib' => 'required|string',
            'numero_rg' => 'required|string',
            'numero_compbanck' => 'required|Integer',
            'banck' => 'required|string|max:200'
        ]);
    Prestataire::create([
    'nom' => $request->nom,
    'statut_juridique' => $request->statut_juridique,
    'entreprise' => $request->entreprise,
    'responsable' => $request->responsable,
    'profession' => $request->profession,
    'secteur_activite' => $request->secteur_activite,
    'tel' => $request->tel,
    'email' => $request->email,
    'cni' => $request->cni,
    'ville' => $request->ville,
    'boite_postale' => $request->boite_postale,
    'numero_contrib' => $request->numero_contrib,
    'numero_rg' => $request->numero_rg,
    'numero_compbanck' => $request->numero_compbanck,
    'banck' => $request->banck
]);
 return redirect()->route('prestataires.index');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Prestataire  $prestataire
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $prestataire = Prestataire::findOrfail($id);
dd($prestataire);
       return view('prestataire.detail' , compact('prestataire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestataire  $prestataire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestataire = Prestataire::findOrfail($id);
        return view('prestataire.modifier', compact('prestataire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestataire  $prestataire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'statut_juridique' => 'required|string',
            'entreprise' => 'string|max:255',
            'responsable' => 'string|max:255',
            'profession' => 'string|max:255',
            'entreprise' => 'required|string',
            'secteur_activite' => 'required|string',
            'tel' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'cni' => 'required|string|max:255',
            'ville' => 'required|string',
            'boite_postale' => 'required|string',
            'numero_contrib' => 'required|string',
            'numero_rg' => 'required|string',
            'numero_compbanck' => 'required|Integer',
            'banck' => 'required|string|max:200'
        ]);
 $prestataire = Prestataire::findOrfail($id);
 $prestataire->update([
    'nom' => $request->nom,
    'statut_juridique' => $request->statut_juridique,
    'entreprise' => $request->entreprise,
    'responsable' => $request->responsable,
    'profession' => $request->profession,
    'secteur_activite' => $request->secteur_activite,
    'tel' => $request->tel,
    'email' => $request->email,
    'cni' => $request->cni,
    'ville' => $request->ville,
    'boite_postale' => $request->boite_postale,
    'numero_contrib' => $request->numero_contrib,
    'numero_rg' => $request->numero_rg,
    'numero_compbanck' => $request->numero_compbanck,
    'banck' => $request->banck
]);
 return redirect()->route('prestataires.show' , $prestataire);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestataire  $prestataire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
