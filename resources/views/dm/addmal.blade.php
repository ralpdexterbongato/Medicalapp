@extends('layouts.master')
@section('content')

<div class="container">

    <div class="container">
      <section class="hero is-info">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
          Les maladies de
            </h1>
            <h2 class="subtitle">
              {{$data->nom}},{{$data->prénom}}
            </h2>
          </div>
        </div>
      </section>
      <hr>



<form method="POST" action="/emp/mal">
  <meta name="csrf-token" content="{{ csrf_token() }}">
   {{ csrf_field() }}
  <label class="label"> Type de maladie</label>
   <div class="select is-primary">
     <select name="id_type">
       <option value="0">Maladies professionnelles</option>
       <option value="1">Maladies familialess,hereditaires et chroniques</option>
     </select>
   </div>
<hr>
<div class="field">
  <label class="label">La maladie </label>
  <div class="control">

  <textarea class="textarea is-primary" rows="6" cols="80" name="libelle"></textarea>
  </div>
  <p class="help">Nom de la maladie</p>
</div>

<div class="field">

  <div class="control">
    <input class="input is-primary is-hidden" type="text" placeholder="Text input" name="nEmployé" value="{{$data->nEmployé}}">
  </div>

</div>


<div class="control">
  <button class="button is-primary">Ajouter</button>
</div>
</form>
</div>
@endsection
