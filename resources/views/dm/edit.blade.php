@extends('layouts.master')
@section('content')
<div class="container">
<div class="field">
  <form method="POST" action="/emp/{{$data->nEmployé}}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
  <label class="label">Nom</label>
  <div class="control">
    <input class="input" type="text" placeholder="nom" name="nom" value="{{$data->nom}}">
  </div>
</div>

<div class="field">
  <label class="label">PréNom</label>
  <div class="control">
    <input class="input" type="text" placeholder="prénom" name ="prénom" value="{{$data->prénom}}">
  </div>
</div>

<div class="field">
  <label class="label">Sexe</label>
  <div class="control">
    <div class="select" >
      <select name="sexe"  value="{{$data->sexe}}">
        <option value="0">Homme</option>
        <option value="1">Femme</option>
      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">date de naissance</label>
  <div class="control">
    <input class="input" type="date" placeholder="Text input" name="dateN" value="{{$data->dateN}}" >
  </div>
</div>

<div class="field">
  <label class="label">Lieu de naissance</label>
  <div class="control">
    <input class="input" type="text" placeholder="Lieu de naissance" name="lieuN" value="{{$data->lieuN}}">
  </div>
</div>

<div class="field">
  <label class="label">Adresse</label>
  <div class="control">
    <textarea class="textarea"  value ="{{$data->adresse}}" type="date" placeholder="Adresse" name="adresse">{{$data->adresse}}</textarea>
  </div>
</div>

<div class="field">
  <label class="label">qualifications professionnel</label>
  <div class="control">
    <textarea class="textarea" type="date" placeholder="qualifications professionnel" name="qualifPro" value="{{$data->qualifPro}}">{{$data->qualifPro}}</textarea>
  </div>
</div>
<!-- 
<div class="field">
  <label class="label">Photo</label>
  <img src="/storage/images/{{$data->photo}}" alt="image" style="height: 200px; width:200px;  border-radius: 50px;" name="photo" value="{{$data->photo}}">
  <div class="control">
    <input class="input" type="file" placeholder="Text input" name="photo" value="{{$data->photo}}">
  </div>
</div> -->

<div class="field">
  <label class="label">RH</label>
  <div class="control">
    <input class="input" type="text" placeholder="RH" name="RH" value="{{$data->RH}}">
  </div>
</div>

<div class="field">
  <label class="label">NSS</label>
  <div class="control">
    <input class="input" type="text" placeholder="NSS" name="NSS" value="{{$data->NSS}}">
  </div>
</div>


<div class="field">
  <label class="label">Service national</label>
  <div class="control">
    <div class="select" >
      <select name="id_sn" value="{{$data->id_sn}}">
        <option value="0">Accompli</option>
        <option value="1">Dispensé</option>
        <option value="2">inapte</option>
      </select>
    </div>
  </div>
</div>


<div class="field">
  <label class="label">situation familiale</label>
  <div class="control">
    <div class="select">
      <select name="id_sf" value="{{$data->id_sf}}">
        <option value="0">célibataire</option>
          <option value="1">marié</option>
        <option value="2">divorcé</option>
      </select>
    </div>
  </div>
</div>


<div class="field">
  <label class="label">Groupe sanguin</label>
  <div class="control">
    <div class="select">
      <select name="id_gr">
        <option value="0">A+</option>
        <option value="1">A-</option>
          <option value="2">B+</option>
            <option value="3">B-</option>
              <option value="4">AB+</option>
                <option value="5">AB-</option>
                  <option value="6">O+</option>
                   <option value="7">O-</option>
      </select>
    </div>
  </div>
</div>



<div class="field">
  <label class="label">Organisme l'empoyeur</label>
  <div class="control">
    <div class="select">
      <select name="id_poste">
        <option value="0">DCR Forge</option>
        <option value="1">DVI Tôlerie et Emboutissage</option>
        <option value="2">DVI Montage Camions</option>
          <option value="3">DVI Montage Autocars et Autobus</option>
      </select>
    </div>
  </div>
</div>




<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Ajouter</button>
  </div>
  <div class="control">
    <button class="button is-danger">Annuler</button>
  </div>
</form>
</div>
</div>

@endsection
