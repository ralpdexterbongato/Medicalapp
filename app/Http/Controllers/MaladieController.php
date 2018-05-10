<?php

namespace App\Http\Controllers;

use App\maladie;
use App\employe;
use Illuminate\Http\Request;

class MaladieController extends Controller
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
        $data = employe::find($id);
        return view('dm.addmal',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new maladie;
        $data->libelle = $request->libelle;
        $data->nEmployé = $request->nEmployé;
        $data->id_type = $request->id_type;
        $data->save();
        return redirect('/emp/'.$data->nEmployé);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\maladie  $maladie
     * @return \Illuminate\Http\Response
     */
    public function show(maladie $maladie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\maladie  $maladie
     * @return \Illuminate\Http\Response
     */
    public function edit(maladie $maladie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\maladie  $maladie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maladie $maladie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\maladie  $maladie
     * @return \Illuminate\Http\Response
     */
    public function destroy(maladie $maladie)
    {
        //
    }
}
