@extends('layouts.master')

@section('content')

<section class="hero is-info">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
      Dossier médical de:
      </h1>
      <h2 class="subtitle">
        {{$emp->nom}},{{$emp->prénom}}
        <hr>
        @if( $ap)
        @if($ap->aptitude == 'Apte')
        <a class="button is-primary card-footer-item">apte</a>

        @elseif($ap->aptitude == 'inapte temporaire')
          <a class="button is-warning card-footer-item">inapte temporaire</a>
          @else
          <a class="button is-danger card-footer-item"> inapte définitif</a>
          @endif
     @endif


      </h2>
    </div>
  </div>
</section>

<hr>
<div class="field is-grouped is-grouped-centered">
<div class="control">

  <a type="submit" class="button is-warning" href="/pdf/{{$emp->nEmployé}}">
  <i class="fa fa-print" aria-hidden="true"></i> Imprimer
</a>

<a type="submit" class="button is-warning"  href="/emp/edit/{{$emp->nEmployé}}" >
<i class="fa fa-pencil-square-o" aria-hidden="true"></i> modifier le dossier
</a>

<a type="submit" class="button is-info"   href="/visite/add/{{$emp->nEmployé}}" >
  <i class="fa fa-plus-circle" aria-hidden="true"></i>  Nouvelle Viste
</a>

<a type="submit" class="button is-success"   href="/emp/acc/{{$emp->nEmployé}}" >
  <i class="fa fa-plus" aria-hidden="true"></i>   ajouter un accident
</a>

<a type="submit" class="button is-success"    href="/emp/ante/{{$emp->nEmployé}}"  >
  <i class="fa fa-plus" aria-hidden="true"></i>   ajouter un antécédent
</a>

<a type="submit" class="button is-success"    href="/emp/mal/{{$emp->nEmployé}}"  >
  <i class="fa fa-plus" aria-hidden="true"></i>   ajouter une maladie
</a>

<a type="submit" class="button is-primary"     href="/visite/emp/{{$emp->nEmployé}}"  >
  <i class="fa fa-list-alt" aria-hidden="true"></i> List de visites
</a>

<a type="submit" class="button is-danger"      href="/deletedata/{{$emp->nEmployé}}" >
  <i class="fa fa-trash" aria-hidden="true"></i> supprimer
</a>








</div>
</div>
<hr>
<div class="container">
  <div class="field is-grouped is-grouped-centered">
  <div class="control">
<img src="/storage/images/{{$emp->photo}}" alt="image" style="height: 200px; width:200px;  border-radius: 50px;">
</div>
</div>

        <hr>
    <strong>Nom:</strong>
    <span class="tagis-large has-text-primary is-large" style="margin-right: 150px;">{{$emp->nom}}</span>

    <strong>Prénom:</strong>
    <span class=" has-text-primary is-large" style="margin-right: 150px;">{{$emp->prénom}}</span>
,
    <strong>Sexe:</strong>
    @if($emp->sexe == 0)
    <span class=" has-text-primary is-large" if="$emp->sexe == 0" style="margin-right: 150px;">Homme</span>
    @else
      <span class=" has-text-primary " if="$emp->sexe == 1" style="margin-right: 150px;">Femme</span>
      @endif

      <hr>
    <strong>Date de naissance:</strong>
    <span class=" has-text-primary is-large" style="margin-right: 150px;">{{$emp->dateN}}</span>

    <strong>Lieu de naissance:</strong>
    <span class=" has-text-primary is-large" style="margin-right: 150px;">{{$emp->lieuN}}</span>

<hr>

    <strong>Adresse:</strong>
    <span class=" has-text-primary  is-large">{{$emp->adresse}}</span>
<hr>


  <strong>situation familiale</strong>
  @if($emp->id_sf == 0)
  <span class=" has-text-primary is-large"  style="margin-right: 150px;">Célibataire</span>
  @elseif($emp->id_sf == 1)
  <span class=" has-text-primary is-large " style="margin-right: 150px;">Marié</span>
  @else
  <span class=" has-text-primary is-large"style="margin-right: 150px;">Divorcé</span>
  @endif


  <strong>situation nationale</strong>
  @if($emp->id_sn == 0)
  <span class=" has-text-primary is-large" style="margin-right: 150px;" />Accompli</span>
    @elseif($emp->id_sn == 1)
      <span class=" has-text-primary is-large " style="margin-right: 150px;"/>Dispensé</span>
    @else
  <span class=" has-text-primary is-large" style="margin-right: 150px;" />Inapte</span>
   @endif

  <hr>
  <strong>Groupe sanguin</strong>
  @if($emp->id_gr == 0)
  <span class=" has-text-primary is-large"style="margin-right: 150px;">A+</span>
 @elseif($emp->id_gr == 1)
  <span class=" has-text-primary is-large " style="margin-right: 150px;">A-</span>
  @elseif($emp->id_gr == 2)
  <span class=" has-text-primary is-large"style="margin-right: 150px;">B+</span>
  @elseif($emp->id_gr == 3)
    <span class=" has-text-primary is-large"style="margin-right: 150px;" >B-</span>
    @elseif($emp->id_gr == 4)
    <span class=" has-text-primary is-large"style="margin-right: 150px;" >AB+</span>
    @elseif($emp->id_gr == 5)
    <span class=" has-text-primary is-large "style="margin-right: 150px;">AB-</span>
    @elseif($emp->id_gr == 6)
    <span class=" has-text-primary is-large"style="margin-right: 150px;">O+</span>
    @else
      <span class=" has-text-primary is-large"style="margin-right: 150px;">O-</span>
      @endif
  <hr>
      <strong>organisme employeur</strong>
      @if($emp->id_poste == 0)
      <span class=" has-text-primary is-large" v-if="list.id_poste == 0" style="margin-right: 150px;">DCR Forge</span>
      @elseif($emp->id_poste == 1)
      <span class=" has-text-primary is-large " v-if="list.id_poste == 1" style="margin-right: 150px;">DVI Tôlerie et Emboutissage</span>
         @elseif($emp->id_poste == 2)
      <span class=" has-text-primary is-large" v-if="list.id_poste == 2" style="margin-right: 150px;">DVI Montage Camions</span>
        @else
        <span class=" has-text-primary is-large" v-if="list.id_poste == 3" style="margin-right: 150px;">DVI Montage Autocars et Autobus</span>
        <hr>
        @endif

    <strong>RH:</strong>
    <span class=" has-text-primary  is-large" style="margin-right: 150px;">{{$emp->RH}}</span>


    <strong>NSS:</strong>
    <span class=" has-text-primary  is-large" style="margin-right: 150px;">{{$emp->NSS}}</span>
<hr>

  <strong>Qualification professionnelle:</strong>
  <span class="  has-text-primary is-large" style="margin-right: 150px;">{{$emp->qualifPro}}</span>

<hr>

  <section class="hero is-info">
    <div class="hero-body has-border">
      <div class="container">
        <h1 class="title">
          Les accidents
        </h1>
        <h2 class="subtitle">
          du travail
        </h2>
      </div>
    </div>
  </section>


   <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
     <thead>
       <tr class="is-selected">
         <th>Lieu</th>
          <th>consécuences</th>
           <th>date</th>
       </tr>
     </thead>
     <tbody>
          @foreach($acc as $ac)
       <tr>
         <th>{{$ac->lieuAcc}}</th>
         <td>{{$ac->consécuences}}</td>
         <td>{{$ac->created_at}}</td>
       </tr>
        @endforeach
     </tbody>
   </table>
<hr>
<a type="submit" class="button is-success"   href="/emp/acc/{{$emp->nEmployé}}" >
  <i class="fa fa-plus" aria-hidden="true"></i>   ajouter un accident
</a>

<hr>
     <section class="hero is-info">
       <div class="hero-body">
         <div class="container">
           <h1 class="title">
             Les antécédents
           </h1>
           <h2 class="subtitle">
             personnel
           </h2>
         </div>
       </div>
     </section>

     <table class="table  is-bordered is-striped is-narrow is-hoverable is-fullwidth">
       <thead>
         <tr class="is-selected" >
           <th>antécédent</th>
            <th>discription</th>
             <th>date</th>
         </tr>
       </thead>
       <tbody>
            @foreach($ante as $at)
         <tr>
           <th>{{$at->libelle}}</th>
           <td>{{$at->discription}}</td>
           <td>{{$at->created_at}}</td>
         </tr>
          @endforeach
       </tbody>
     </table>
     <hr>
     <a type="submit" class="button is-success"    href="/emp/ante/{{$emp->nEmployé}}"  >
       <i class="fa fa-plus" aria-hidden="true"></i>   ajouter un antécédent
     </a>

<hr>

     <section class="hero is-info">
       <div class="hero-body">
         <div class="container">
           <h1 class="title">
             Les maladies
           </h1>
           <h2 class="subtitle">

           </h2>
         </div>
       </div>
     </section>

     <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
       <thead>
         <tr class=" is-selected">
           <th>maladies professionnelles</th>
           <th>date</th>
         </tr>
       </thead>
       <tbody>

            @foreach($mal as $ma  )
            @if($ma->id_type == 0)
         <tr>
           <th>{{$ma->libelle}}</th>
           <td>{{$ma->created_at}}</td>
         </tr>
         @endif
          @endforeach
       </tbody>
     </table>
<hr>
     <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
       <thead>
         <tr class=" is-selected">
           <th>maladies familiales, hereditaires et chroniques</th>
           <th>date</th>
         </tr>
       </thead>
       <tbody>

            @foreach($mal as $ma  )
            @if($ma->id_type == 1)
         <tr>
           <th>{{$ma->libelle}}</th>
           <td>{{$ma->created_at}}</td>
         </tr>
         @endif
          @endforeach
       </tbody>
     </table>
     <hr>

     <a type="submit" class="button is-success"    href="/emp/mal/{{$emp->nEmployé}}"  >
       <i class="fa fa-plus" aria-hidden="true"></i>   ajouter une maladie
     </a>

     <hr>






</div>

@endsection
