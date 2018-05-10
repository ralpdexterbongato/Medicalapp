<?php

namespace App\Http\Controllers;

use App\employe_acc;
use App\employe;
use App\accidentsTravail;
use Illuminate\Http\Request;

class EmployeAccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $data = employe::find($id);
       $dat = accidentsTravail::get();
       foreach ($dat as $d) {
         echo $d->pivot->lieuAcc;
       }
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
     * @param  \App\employe_acc  $employe_acc
     * @return \Illuminate\Http\Response
     */
    public function show(employe_acc $employe_acc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employe_acc  $employe_acc
     * @return \Illuminate\Http\Response
     */
    public function edit(employe_acc $employe_acc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employe_acc  $employe_acc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employe_acc $employe_acc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employe_acc  $employe_acc
     * @return \Illuminate\Http\Response
     */
    public function destroy(employe_acc $employe_acc)
    {
        //
    }
}
