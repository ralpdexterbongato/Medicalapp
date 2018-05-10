@extends('layouts.master')

@section('content')
<hr>
<div class="columns">
  <div class="column">
<div class="card">
  <div class="card-content">
    <p class="title">
      {{$emp}}
    </p>
    <p class="subtitle">
    Nombre total des employés
    </p>
  </div>
</div>
</div>

  <div class="column">
    <div class="card">
  <div class="card-content">
    <p class="title">
      {{$male}}
    </p>
    <p class="subtitle">
   Hommes
    </p>
  </div>
</div>
</div>

  <div class="column">
    <div class="card">
  <div class="card-content">
    <p class="title">
      {{$female}}
    </p>
    <p class="subtitle">
   Femmes
    </p>
  </div>
</div>
</div>

</div>

<div class="columns">
  <div class="column">
<div class="card">
  <div class="card-content">
    <p class="title">
      {{$visite}}
    </p>
    <p class="subtitle">
    Nombre total des visites
    </p>
  </div>
</div>
</div>


  <div class="column">
    <div class="card">
  <div class="card-content">
    <p class="title">
      {{$one}}
    </p>
    <p class="subtitle">
  Visite Dambauche
    </p>
  </div>
</div>
</div>


  <div class="column">
    <div class="card">
  <div class="card-content">
    <p class="title">
      {{$two}}
    </p>
    <p class="subtitle">
   Visite Periodique
    </p>
  </div>
</div>
</div>
</div>

</div>
<hr>
@endsection
