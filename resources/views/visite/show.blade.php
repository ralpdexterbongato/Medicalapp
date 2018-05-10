@extends('layouts.master')

@section('content')

<section class="hero is-info">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
      Visite de
      </h1>
      <h2 class="subtitle">
    <strong>  {{$emp->nom}},{{$emp->prénom}}</strong> <br>
      Le : <strong>{{$visite->created_at}} </strong> <br>
      Par : <strong> {{$user->name}} </strong>
      </h2>
    </div>
  </div>
</section>

<hr>
<div class="columns">
  <div class="column">
<div class="card">
  <div class="card-content">
    <p class="title">
      {{$visite->poids}} KG
    </p>
    <p class="subtitle">
      Poids
    </p>
  </div>

</div>
</div>
  <div class="column">
<div class="card">
  <div class="card-content">
    <p class="title">
      {{$visite->taille}} Métre
    </p>
    <p class="subtitle">
      Taille
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
      {{$visite->albumine}}
    </p>
    <p class="subtitle">
      albumine
    </p>
  </div>
  </div>
  </div>

  <div class="column">
  <div class="card">
  <div class="card-content">
    <p class="title">
      {{$visite->sucre}}
    </p>
    <p class="subtitle">
      sucre
    </p>
  </div>
  </div>
  </div>

  <div class="column">
  <div class="card">
  <div class="card-content">
    <p class="title">
      {{$visite->hématies}}
    </p>
    <p class="subtitle">
      hématies
    </p>
  </div>
  </div>
  </div>

  <div class="column">
  <div class="card">
  <div class="card-content">
    <p class="title">
      {{$visite->ph}}
    </p>
    <p class="subtitle">
      PH
    </p>
  </div>
  </div>
  </div>

  <div class="column">
  <div class="card">
  <div class="card-content">
    <p class="title">
      {{$visite->corpsCétoniques}}
    </p>
    <p class="subtitle">
      corpsCétoniques
    </p>
  </div>
  </div>
  </div>
</div>


<div class="columns">
  <div class="column">
    <div class="card-content">
        <img src="{{url('/images/ear.jpg')}}" alt="" style="height: 200px; width:350px">
    </div>
    <footer class="card-footer">
   <a class="card-footer-item">  Droit : <strong>{{$visite->oreillleDroit}}</strong></a>
   <a  class="card-footer-item">Gauche : <strong>{{$visite->oreillleGauche}}</strong></a>

 </footer>
  </div>

  <div class="column">
    <div class="card-content">
      <p class="title">
        <img src="{{url('/images/eye.jpg')}}" alt="" style="height: 200px; width:350px">
      </p>

    </div>

    <footer class="card-footer">
   <a class="card-footer-item">Droit : <strong>{{$visite->oeilDroit}}</strong></a>
   <a  class="card-footer-item">Gauche : <strong>{{$visite->oeilDroit}}</strong></a>


 </footer>
 <footer class="card-footer">
 <a  class="card-footer-item">De prés : <strong>{{$visite->dePrés}}</strong></a>
  <a  class="card-footer-item">De loin : <strong>{{$visite->deLoin}}</strong></a>
</footer>

</footer>
<footer class="card-footer">
<a  class="card-footer-item">Coleurs: <strong>{{$visite->coleurs}}</strong></a>
</footer>

</footer>
<footer class="card-footer">
<a  class="card-footer-item">Droit avec Correction: <strong>{{$visite->droitCOrrection}}</strong></a>
 <a  class="card-footer-item">Gauche avec Correction: <strong>{{$visite->gaucheCorrection}}</strong></a>
</footer>

  </div>

</div>

<hr>
@if ($ori)
<div class="columns">
  <div class="column">
    <div class="card">
      <div class="card-content">
        <p class="title">
        Orientation
        </p>
        <p class="subtitle">

        </p>
      </div>
      <p  class="card-footer-item">spécialité:  <strong>{{$ori->spécialité}}</strong></p>
    </div>

    <footer class="card-footer">
    <a  class="card-footer-item">serviceSocial: <strong>{{$ori->serviceSocial}}</strong></a>
     <a  class="card-footer-item">serviceEmploi: <strong>{{$ori->serviceEmploi}}</strong></a>
    </footer>

        <footer class="card-footer">
        <a  class="card-footer-item">La date: <strong>{{$ori->created_at}}</strong></a>
        </footer>

        <a type="submit" class="button is-warning is-large" href="/visite/ori/pdf/{{$visite->id_v}}">
        <i class="fa fa-print" aria-hidden="true"></i> Imprimer
      </a>

  </div>

  @endif

@if ($ap)
    <div class="column">
      <div class="card">
        <div class="card-content">
          <p class="title">
          L'aptitude
          </p>
          <p class="subtitle">
          </p>
        </div>
      </div>
      <footer class="card-footer">
        @if($ap->aptitude == 'Apte')
        <a class="button is-info card-footer-item">apte</a>

        @elseif($ap->aptitude == 'inapte temporaire')
          <a class="button is-warning card-footer-item">inapte temporaire</a>
          @else
          <a class="button is-danger card-footer-item"> inapte définitif</a>
          @endif


      </footer>
      <footer class="card-footer">
      <strong  class="card-footer-item">Postes Conseillés :</strong>
       <strong  class="card-footer-item">Postes Deconseillés:</strong>
      </footer>
      <footer class="card-footer">
      <a  class="card-footer-item"><strong>{{$ap->postesConseillés}}</strong></a>
       <a  class="card-footer-item"><strong>{{$ap->postesDeconseillés}}</strong></a>
      </footer>

      <a type="submit" class="button is-warning is-large" href="/visite/ap/pdf/{{$visite->id_v}}">
      <i class="fa fa-print" aria-hidden="true"></i> Imprimer
    </a>

  </div>
</div>
@endif


@endsection
