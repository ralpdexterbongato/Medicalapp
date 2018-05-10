<?php

namespace App\Http\Controllers;

use App\aptitudeAuTravail;
use App\visite;
use Illuminate\Http\Request;

class AptitudeAuTravailController extends Controller
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
        $data = new aptitudeAuTravail;
        $data->aptitude = $request->aptitude;
        $data->postesDeconseillés = $request->postesDeconseillés;
        $data->postesConseillés = $request->postesConseillés;
        $data->id_v = $request->id_v;
        $data->save();
        return redirect('/visite/'. $data->id_v);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\aptitudeAuTravail  $aptitudeAuTravail
     * @return \Illuminate\Http\Response
     */
    public function show(aptitudeAuTravail $aptitudeAuTravail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aptitudeAuTravail  $aptitudeAuTravail
     * @return \Illuminate\Http\Response
     */
    public function edit(aptitudeAuTravail $aptitudeAuTravail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aptitudeAuTravail  $aptitudeAuTravail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aptitudeAuTravail $aptitudeAuTravail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\aptitudeAuTravail  $aptitudeAuTravail
     * @return \Illuminate\Http\Response
     */
    public function destroy(aptitudeAuTravail $aptitudeAuTravail)
    {
        //
    }
}
