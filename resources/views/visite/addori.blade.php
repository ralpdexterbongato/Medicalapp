@extends('layouts.master')
@section('content')
@if($visite->typeVisite == 'Visite Periodique')
<div class="container">
  <section class="hero is-info">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
      Orientations medical:
        </h1>
      </div>
    </div>
  </section>
  <hr>

<form method="POST" action="/visite/addori">
  <meta name="csrf-token" content="{{ csrf_token() }}">
   {{ csrf_field() }}
<div class="field">
  <label class="label">spécialité</label>
  <div class="control">
    <input class="input is-primary" type="text" placeholder="spécialité" name="spécialité">
  </div>
</div>



<div class="field">
  <label class="label">serviceSocial </label>
  <div class="control">
    <input class="input is-primary" rows="6" cols="80" name="serviceSocial" placeholder="serviceSocial">
  </div>
</div>


<div class="field">
  <label class="label">serviceEmploi </label>
  <div class="control">
    <input class="input is-primary" rows="6" cols="80" name="serviceEmploi" placeholder="serviceEmploi">
  </div>
</div>

<div class="field">
  <label class="label"></label>
  <div class="control">
    <input class="input is-primary is-hidden" type="text" placeholder="Text input" name="id_v" value="{{$visite->id_v}}">
  </div>
</div>
<div class="field is-grouped is-grouped-right">
<div class="control">
  <button class="button is-info is-left is-medium ">Enregistrer</button>
</div>
</div>

</form>
</div>

@else

<div class="container">
  <section class="hero is-info">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
    Aptitude au travail
        </h1>
      </div>
    </div>
  </section>
  <hr>

<form method="POST" action="/visite/app">
  <meta name="csrf-token" content="{{ csrf_token() }}">
   {{ csrf_field() }}

   <div class="field">

     <label class="label">L'aptitude</label>
     <div class="control">
       <div class="select" >
         <select name="aptitude">
           <option value="Apte">Apte</option>
           <option value="inapte temporaire">inapte temporaire</option>
           <option value="inapte définitif">inapte définitif</option>
         </select>
       </div>
     </div>
<hr>
<div class="field">
  <label class="label">postes Conseillés: </label>
  <div class="control">
    <textarea class="textarea is-primary" rows="6" cols="80" name="postesConseillés"></textarea>
  </div>
  <p class="help">Les postesConseillés</p>
</div>

<div class="field">
  <label class="label">postes Deconseillés: </label>
  <div class="control">
    <textarea class="textarea is-primary" rows="6" cols="80" name="postesDeconseillés"></textarea>
  </div>
  <p class="help">Les postesDeconseillés</p>
</div>


<div class="field">


  <div class="control">
    <input class="input is-primary is-hidden" type="text" placeholder="Text input" name="id_v" value="{{$visite->id_v}}">
  </div>
</div>


<div class="field is-grouped is-grouped-right">
<div class="control">
  <button class="button is-info is-left is-medium ">Enregistrer</button>
</div>
</form>
</div>


@endif
@endsection
