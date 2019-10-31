<?php

namespace App\Http\Controllers;

use App\Atribution;
use App\Marche;
use App\User;
use App\Prestataire;
use Illuminate\Http\Request;

class AtributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atribution = Atribution::all();
        $user = User::all();
        $marché = Marche::all();
        $prestataire =Prestataire::all();

       //dd($atribution);
       return view('atribution.liste', compact('atribution' , 'user' , 'marché' , 'prestataire' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $marché = Marche::all();
        $prestataire = Prestataire::all();
        return view('atribution.atribue' , compact('marché' , 'prestataire' , 'users'));
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
            'user_id' => 'required|Integer',
            'marche_id' => 'required|Integer',
            'prestataire_id' => 'required|Integer',
            'date_livréson' => 'required|date',
            'delai_livreson' => 'required|string',
            'lieu_livreson' => 'required|string'
        ]);

        Atribution::create([
            'user_id' => $request->user_id,
            'marche_id' => $request->marche_id,
            'prestataire_id' => $request->prestataire_id,
            'date_livréson' => $request->date_livréson,
            'delai_livreson' => $request->delai_livreson,
            'lieu_livreson' => $request->lieu_livreson
        ]);

        return redirect()->route('attributions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atribution  $atribution
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atribution = Atribution::findOrfail($id);
        //dd($atribution);
        return view('atribution.detail' , compact('atribution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atribution  $atribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Atribution $id)
    {
        $users = User::all();
        $marché = Marche::all();
        $prestataire =Prestataire::all();
        $atribution = Atribution::findOrfail($id);
        return view('atribution.modifier' , compact('atribution') , compact('users') , compact('prestataire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atribution  $atribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atribution $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|Integer',
            'marche_id' => 'required|Integer',
            'prestataire_id' => 'required|Integer',
            'date_livréson' => 'required|date',
            'delai_livreson' => 'required|string',
            'lieu_livreson' => 'required|string'
        ]);
        $atribution = Atribution::findOrfaild($id);
        $atribution->update([
            'user_id' => $request->user_id,
            'marche_id' => $request->marche_id,
            'prestataire_id' => $request->prestataire_id,
            'date_livréson' => $request->date_livreson,
            'delai_livreson' => $request->delai_livreson,
            'lieu_livreson' => $request->lieu_livreson,
        ]);
        return redirect()->route('atributions.show' , $atribution);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atribution  $atribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atribution $atribution)
    {
        //
    }
}
