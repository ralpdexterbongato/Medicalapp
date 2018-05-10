<?php

namespace App\Http\Controllers;

use App\antecedentsPerso;
use App\employe;
use Illuminate\Http\Request;

class AntecedentsPersoController extends Controller
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
        return view('dm.addant',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new antecedentsPerso;
        $data->libelle = $request->libelle;
        $data->discription = $request->discription;
        $data->nEmployé = $request->nEmployé;
        $data->save();
        return redirect('/emp/'.$data->nEmployé);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\antecedentsPerso  $antecedentsPerso
     * @return \Illuminate\Http\Response
     */
    public function show(antecedentsPerso $antecedentsPerso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\antecedentsPerso  $antecedentsPerso
     * @return \Illuminate\Http\Response
     */
    public function edit(antecedentsPerso $antecedentsPerso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\antecedentsPerso  $antecedentsPerso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, antecedentsPerso $antecedentsPerso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\antecedentsPerso  $antecedentsPerso
     * @return \Illuminate\Http\Response
     */
    public function destroy(antecedentsPerso $antecedentsPerso)
    {
        //
    }
}
