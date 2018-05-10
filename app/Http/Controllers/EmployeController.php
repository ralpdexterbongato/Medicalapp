<?php

namespace App\Http\Controllers;

use App\employe;
use App\accidentsTravail;
use App\antecedentsPerso;
use Storage;
use App\aptitudeAuTravail;
use App\visite;
use PDF;
use App\maladie;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = employe::orderBy('created_at', 'desc')->get();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('dm.create');
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

               'nom' => 'required',
               'prénom' => 'required|min:5',
               'sexe' => 'required',
               'dateN' => 'required',
               'lieuN' => 'required',
               'adresse' => 'required',
               // 'photo' => 'required',
               'id_sn' => 'required',
               'id_sf' => 'required',
               'id_gr' => 'required',

           ], [

               'nom.required' => 'Le nom est requis',
               'prénom.required' => 'Le prénom est requis',
               'sexe.required' => 'sexe est requis',
               'dateN.required' => 'La date de naissance estrequis',
               'lieuN.required' => 'Le lieu de naissance  est requis',
               'photo.required' => 'La photo est requis',
               'id_sn.required' => 'La situation national est requis',
               'id_sf.required' => 'La situation familialle est requis',
               'id_gr.required' => 'Le groupage est requis',




           ]);
      $data = new employe;
      $data->nom = $request->nom;
      $data->prénom = $request->prénom;
      $data->sexe = $request->sexe;
      $data->dateN = $request->dateN;
      $data->lieuN = $request->lieuN;
      $data->adresse = $request->adresse;
      $data->photo = $request->photo;
      $data->RH = $request->RH;
      $data->NSS = $request->NSS;
      $data->qualifPro = $request->qualifPro;
      $data->id_sn = $request->id_sn;
      $data->id_sf = $request->id_sf;
      $data->id_gr = $request->id_gr;
      $data->id_poste = $request->id_poste;
      if($request->hasFile('photo')){
      $data->photo = $request->file('photo')->hashName();
      Storage::putFile('public\images',$request->file('photo'));
      }
      $data->save();

      return redirect('/emp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(employe $employe,$id)
    {
        $emp = employe::find($id);
        $x = $emp->nEmployé;
        $acc = accidentsTravail::where('nEmployé' , $x)->get();
        $ante = antecedentsPerso::where('nEmployé' , $x)->get();
        $mal = maladie::where('nEmployé' , $x)->get();
        $v = visite::where('nEmployé', $x)->orderBy('created_at','desc')->first();


        if($v){
        $a = $v->id_v;
          $ap = aptitudeAuTravail::where('id_v',$a)->orderBy('created_at','desc')->first();
        return view('dm.show',compact('emp','acc','ante','mal','ap'));
      }
    else  {
      $ap = '';
            return view('dm.show',compact('emp','acc','ante','mal','ap'));
}

    }


      public function pdf($id) {
        $emp = employe::find($id);
        $x = $emp->nEmployé;
        $acc = accidentsTravail::where('nEmployé' , $x)->get();
        $ante = antecedentsPerso::where('nEmployé' , $x)->get();
        $mal = maladie::where('nEmployé' , $x)->get();
        $pdf = PDF::loadView('dm.print', compact('emp','acc','ante','mal') );
        return $pdf->download('invoice.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(employe $employe,$id)
    {
        $data = employe::find($id);
        return view('dm.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employe $employe)
    {
      $employe->nom = $request->nom;
      $employe->prénom = $request->prénom;
      $employe->sexe = $request->sexe;
      $employe->dateN = $request->dateN;
      $employe->lieuN = $request->lieuN;
      $employe->adresse = $request->adresse;
      $employe->RH = $request->RH;
      $employe->NSS = $request->NSS;
      $employe->qualifPro = $request->qualifPro;
      $employe->id_sn = $request->id_sn;
      $employe->id_sf = $request->id_sf;
      $employe->id_gr = $request->id_gr;
      $employe->id_poste = $request->id_poste;

      $employe->save();

      return redirect('/emp/'.$employe->nEmployé);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(employe $employe,Request $request,$id)
    {
        $emp = $id;
        $data = employe::find($id);
        $data->delete();
        return redirect('/emp');
    }

    public function stats(){
      $emp = employe::all()->count();
      $male = employe::where('sexe', 0)->get()->count();
      $female = employe::where('sexe', 1)->get()->count();
      $visite = visite::all()->count();
      $one = visite::where('typeVisite', 'Visite Dambauche')->count();
      $two = visite::where('typeVisite', 'Visite Periodique')->count();

      return view('dm.stats',compact('emp','male','female','visite','one','two'));

    }
}
