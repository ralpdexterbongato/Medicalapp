@extends('layouts.master')
@section('content')

<div class="container">
  <section class="hero is-info">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
      Les accidents du travail de
        </h1>
        <h2 class="subtitle">
          {{$data->nom}},{{$data->prénom}}
        </h2>
      </div>
    </div>
  </section>
  <hr>

<form method="POST" action="/emp/acc">
  <meta name="csrf-token" content="{{ csrf_token() }}">
   {{ csrf_field() }}
<div class="field">
  <label class="label">Lieu</label>
  <div class="control">
    <input class="input is-primary" type="text" placeholder="" name="lieuAcc">
  </div>
  <p class="help">Le lieu de l'accident du travail</p>
</div>

<div class="field">
  <label class="label">consécuences </label>
  <div class="control">
    <textarea class="textarea is-primary" rows="6" cols="80" name="consécuences"></textarea>
  </div>
  <p class="help">Les consécuences de l'accident du travail</p>
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
