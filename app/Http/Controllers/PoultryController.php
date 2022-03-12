<?php

namespace App\Http\Controllers;

use App\Models\Poultry;
use Illuminate\Http\Request;

class PoultryController extends Controller
{
    public function index()
    {
        return view('poultry.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function show(Poultry $poultry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function edit(Poultry $poultry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poultry $poultry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poultry  $poultry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poultry $poultry)
    {
        //
    }
}
