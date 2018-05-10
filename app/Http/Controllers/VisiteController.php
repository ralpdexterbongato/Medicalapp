<?php

namespace App\Http\Controllers;

use App\visite;
use App\employe;
use App\User;
use App\orientations;
use App\aptitudeAuTravail;
use PDF;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = visite::where('id_med',  auth()->id())->orderBy('created_at', 'desc')->get();

       return $data;
    }

    public function pdf_visite(){
    $X = Carbon::now()->format('Y-m-d');
    $data = visite::wheredate('created_at' ,'LIKE', $X ." %" )->get();
    $pdf = PDF::loadView('visite.pdf',compact('data','X'));
    return $pdf->download('invoice.pdf');
    return $data;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function showByEmp($id){

       $emp = employe::find($id);
       $x = $emp->nEmployé;
       $visite = visite::where('nEmployé', $x)->orderBy('created_at', 'desc')->get();
       return view('visite.showByEmp',compact('visite','emp'));

     }

    public function create(request $request,$id)
    {
        $data = employe::find($id);
        $x = $data->nEmployé;
        $visite = visite::where('nEmployé', $x)->first();
        return view('/visite/addvisite',compact('data','visite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = request()->validate([

               'typeVisite' => 'required',


           ], [

               'typeVisite.required' => 'Le type de visite est requis',

           ]);
       $data =  new visite;
       $data->typeVisite = $request->typeVisite;
       $data->poids = $request->poids;
       $data->taille = $request->taille;
       $data->albumine = $request->albumine;
       $data->sucre = $request->sucre;
       $data->hématies = $request->hématies;
       $data->ph = $request->ph;
       $data->corpsCétoniques = $request->corpsCétoniques;
       $data->oeilDroit = $request->oeilDroit;
       $data->oeilGauche =$request->oeilGauche;
       $data->dePrés = $request->dePrés;
       $data->deLoin = $request->deLoin;
       $data->coleurs = $request->coleurs;
       $data->droitCOrrection =  $request->droitCOrrection;
       $data->gaucheCorrection = $request->gaucheCorrection;
       $data->oreillleDroit = $request->oreillleDroit;
       $data->oreillleGauche =  $request->oreillleGauche;
       $data->nEmployé = $request->nEmployé;
      $data->id_med =  auth()->id();
       $data->save();
       return redirect('/visite/addori/' . $data->id_v);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function show(visite $visite,$id)
    {
        $visite = visite::find($id);
        $x = $visite->nEmployé;
        $y = $visite->id_med;
        $z = $visite->id_v;
        $emp = employe::where('nEmployé',$x)->first();
        $user = User::where('id', $y)->first();
        $ori = orientations::where('id_v', $z )->first();
        $ap = aptitudeAuTravail::where('id_v',$z)->first();

        return view('visite.show',compact('visite','emp','user','ori','ap'));
    }

    public function pdf_ori($id){

      $visite = visite::find($id);
      $x = $visite->nEmployé;
      $y = $visite->id_med;
      $z = $visite->id_v;
      $emp = employe::where('nEmployé',$x)->first();
      $user = User::where('id', $y)->first();
      $ori = orientations::where('id_v', $z )->first();
      $pdf = PDF::loadView('visite.pdf_ori',compact('visite','emp','user','ori'));
      return $pdf->download('invoice.pdf');

    }

    public function pdf_ap($id){
      $visite = visite::find($id);
      $x = $visite->nEmployé;
      $y = $visite->id_med;
      $z = $visite->id_v;
      $emp = employe::where('nEmployé',$x)->first();
      $user = User::where('id', $y)->first();
      $ap = aptitudeAuTravail::where('id_v',$z)->first();
      $pdf = PDF::loadView('visite.pdf_ap',compact('visite','emp','user','ap'));
      return $pdf->download('invoice.pdf');


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function edit(visite $visite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, visite $visite)
    {
        $data = $visite;
        $data->typeVisite = $request->typeVisite;
        $data->poids = $request->poids;
        $data->taille = $request->taille;
        $data->albumine = $request->albumine;
        $data->sucre = $request->sucre;
        $data->hématies = $request->hématies;
        $data->ph = $request->ph;
        $data->corpsCétoniques = $request->corpsCétoniques;
        $data->oeilDroit = $request->oeilDroit;
        $data->oeilGauche =$request->oeilGauche;
        $data->dePrés = $request->dePrés;
        $data->deLoin = $request->deLoin;
        $data->coleurs = $request->coleurs;
        $data->droitCOrrection =  $request->droitCOrrection;
        $data->gaucheCorrection = $request->gaucheCorrection;
        $data->oreillleDroit = $request->oreillleDroit;
        $data->oreillleGauche =  $request->oreillleGauche;
        $data->save();
        return rediect('/visite/'.$visite->id_v);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function destroy(visite $visite)
    {
        //
    }
}
