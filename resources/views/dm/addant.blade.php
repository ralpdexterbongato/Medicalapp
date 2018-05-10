@extends('layouts.master')
@section('content')

<div class="container">

  <div class="container">
    <section class="hero is-info">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
        Les antecedents personnels de
          </h1>
          <h2 class="subtitle">
            {{$data->nom}},{{$data->prénom}}
          </h2>
        </div>
      </div>
    </section>
    <hr>


<form method="POST" action="/emp/ante">
  <meta name="csrf-token" content="{{ csrf_token() }}">
   {{ csrf_field() }}

   <div class="select is-primary">
     <select name="libelle">
       <option value="Affection congenitales">Affection congenitales</option>
       <option value="Maladies generales">Maladies generales</option>
        <option value="Interventions">Interventions</option>
         <option value="Accidents">Accidents</option>
          <option value="Intoxications">Intoxications</option>
           <option value="Autre">Autre</option>
     </select>
   </div>
<hr>
<div class="field">
  <label class="label">discription </label>
  <div class="control">
    <textarea class="textarea is-primary" rows="6" cols="80" name="discription"></textarea>
  </div>

</div>

<div class="field">

  <div class="control">
    <input class="input is-primary is-hidden" type="text" placeholder="Text input" name="nEmployé" value="{{$data->nEmployé}}">
  </div>
</div>


<div class="field is-grouped is-grouped-right">
<div class="control">
  <button class="button is-info is-left is-medium ">Enregistrer</button>
</div>
</form>
</div>
@endsection
