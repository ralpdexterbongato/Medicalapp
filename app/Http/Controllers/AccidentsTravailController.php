<?php

namespace App\Http\Controllers;

use App\accidentsTravail;
use App\employe;
use Illuminate\Http\Request;

class AccidentsTravailController extends Controller
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
    public function create(employe $employe,$id)
    {
       $data = employe::find($id);
           return view('dm.addacc',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new accidentsTravail;
        $data->lieuAcc = $request->lieuAcc;
        $data->consécuences = $request->consécuences;
        $data->nEmployé = $request->nEmployé;



        $data->save();
        return redirect('/emp/'.$data->nEmployé);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accidentsTravail  $accidentsTravail
     * @return \Illuminate\Http\Response
     */
    public function show(accidentsTravail $accidentsTravail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accidentsTravail  $accidentsTravail
     * @return \Illuminate\Http\Response
     */
    public function edit(accidentsTravail $accidentsTravail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accidentsTravail  $accidentsTravail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accidentsTravail $accidentsTravail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accidentsTravail  $accidentsTravail
     * @return \Illuminate\Http\Response
     */
    public function destroy(accidentsTravail $accidentsTravail)
    {
        //
    }
}
