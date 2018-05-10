<?php

namespace App\Http\Controllers;

use App\orientations;

use App\visite;
use Illuminate\Http\Request;

class OrientationsController extends Controller
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
    public function create($id)
    {
        $visite = visite::find($id);
        return view('visite/addori',compact('visite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new orientations;
        $data->spécialité = $request->spécialité;
        $data->serviceSocial = $request->serviceSocial;
        $data->serviceEmploi = $request->serviceEmploi;
        $data->id_v = $request->id_v;
       $data->save();
         return redirect('/visite/'. $data->id_v);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\orientations  $orientations
     * @return \Illuminate\Http\Response
     */
    public function show(orientations $orientations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\orientations  $orientations
     * @return \Illuminate\Http\Response
     */
    public function edit(orientations $orientations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\orientations  $orientations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orientations $orientations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\orientations  $orientations
     * @return \Illuminate\Http\Response
     */
    public function destroy(orientations $orientations)
    {
        //
    }
}
