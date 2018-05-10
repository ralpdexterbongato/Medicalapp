@extends('layouts.master')
@section('content')
<hr>
<div class="container">
<div class="field">
  <form method="POST" action="/emp" enctype="multipart/form-data">
    {{ csrf_field() }}
  <label class="label">Nom</label>
  <div class="control">
    <input class="input" type="text" placeholder="nom" name="nom">
    <span class="has-text-danger">{{ $errors->first('nom') }}</span>
  </div>
</div>

<div class="field">
  <label class="label">PréNom</label>
  <div class="control">
    <input class="input" type="text" placeholder="prénom" name ="prénom">
    <span class="has-text-danger">{{ $errors->first('prénom') }}</span>
  </div>
</div>

<div class="field">
  <label class="label">Sexe</label>
  <div class="control">
    <div class="select" >
      <select name="sexe">
        <option value="0">Homme</option>
        <option value="1">Femme</option>
      </select>
    </div>
    <span class="has-text-danger">{{ $errors->first('sexe') }}</span>
  </div>
</div>

<div class="field">
  <label class="label">date de naissance</label>
  <div class="control">
    <input class="input" type="date" placeholder="Text input" name="dateN">

  </div>
    <span class="has-text-danger">{{ $errors->first('dateN') }}</span>
</div>

<div class="field">
  <label class="label">Lieu de naissance</label>
  <div class="control">
    <input class="input" type="text" placeholder="Lieu de naissance" name="lieuN">
    <span class="has-text-danger">{{ $errors->first('lieuN') }}</span>
  </div>
</div>

<div class="field">
  <label class="label">Adresse</label>
  <div class="control">
    <textarea class="textarea" type="date" placeholder="Adresse" name="adresse"></textarea>
    <span class="has-text-danger">{{ $errors->first('adresse') }}</span>
  </div>
</div>

<div class="field">
  <label class="label">qualifications professionnel</label>
  <div class="control">
    <textarea class="textarea" type="date" placeholder="qualifications professionnel" name="qualifPro"></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Photo</label>
  <div class="control">
    <input class="input" type="file" placeholder="Text input" name="photo">
  </div>
    <span class="has-text-danger">{{ $errors->first('photo') }}</span>
</div>

<div class="field">
  <label class="label">RH</label>
  <div class="control">
    <input class="input" type="text" placeholder="RH" name="RH">
  </div>
</div>

<div class="field">
  <label class="label">NSS</label>
  <div class="control">
    <input class="input" type="text" placeholder="NSS" name="NSS">
  </div>
</div>


<div class="field">
  <label class="label">Service national</label>
  <div class="control">
    <div class="select" >
      <select name="id_sn">
        <option value="0">Accompli</option>
        <option value="1">Dispensé</option>
        <option value="2">inapte</option>
      </select>
    </div>
      <span class="has-text-danger">{{ $errors->first('id_sn') }}</span>
  </div>
</div>


<div class="field">
  <label class="label">situation familiale</label>
  <div class="control">
    <div class="select">
      <select name="id_sf">
        <option value="0">célibataire</option>
          <option value="1">marié</option>
        <option value="2">divorcé</option>
      </select>
    </div>
      <span class="has-text-danger">{{ $errors->first('id_sf') }}</span>
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
      <span class="has-text-danger">{{ $errors->first('id_gr') }}</span>
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
<hr>
@if (count($errors))

    <ul>

        @foreach($errors->all() as $error)


            <li class="has-text-danger">{{ $error }}</li>

        @endforeach

    </ul>

@endif
@endsection
