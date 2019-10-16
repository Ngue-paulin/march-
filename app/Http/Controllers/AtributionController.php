<?php

namespace App\Http\Controllers;

use App\Atribution;
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
      return view('atribution.liste' , compact('atribution'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atribution.atribue');
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
            'date_livreson' => 'required|date',
            'delai_livreson' => 'required|string',
            'lieu_livreson' => 'required|string'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atribution  $atribution
     * @return \Illuminate\Http\Response
     */
    public function show(Atribution $atribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atribution  $atribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Atribution $atribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atribution  $atribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atribution $atribution)
    {
        //
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
