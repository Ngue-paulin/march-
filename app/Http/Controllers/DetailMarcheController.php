<?php

namespace App\Http\Controllers;

use App\DetailMarche;
use Illuminate\Http\Request;

class DetailMarcheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
        'transport' => 'required|text',
        'assurance' => 'required|text'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailMarche  $detailMarche
     * @return \Illuminate\Http\Response
     */
    public function show(DetailMarche $detailMarche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailMarche  $detailMarche
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailMarche $detailMarche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailMarche  $detailMarche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailMarche $detailMarche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailMarche  $detailMarche
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailMarche $detailMarche)
    {
        //
    }
}
