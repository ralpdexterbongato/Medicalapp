
<img id="logo" src="./images/entete.jpg" alt="Logo">
<hr>
<img src="./storage/images/{{$emp->photo}}" alt="image" style="height: 150px; width:150px;  border-radius: 50px;">
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

<p><strong>DOSSIER MEDICAL N: </stong>  {{$emp->nEmployé}}</p>
<hr>
<p><strong>Nom : </strong> <span>{{$emp->nom}}</span>. <strong> Prénom :</strong> <span>{{$emp->prénom}} </span>
  <strong>Sexe:</strong>
  @if($emp->sexe == 0)
  <span class=" has-text-primary is-large" if="$emp->sexe == 0" style="margin-right: 150px;">Homme</span>
  @else
    <span class=" has-text-primary " if="$emp->sexe == 1" style="margin-right: 150px;">Femme</span>
    @endif
  </p>

<p><strong> Né(e) le :</strong> {{$emp->dateN}}  <strong>A :</strong> {{$emp->lieuN}}</p>

<p> <strong>Situation de famile</strong>   @if($emp->id_sf == 0)
<span class=" has-text-primary is-large"  style="margin-right: 150px;">Célibataire</span>
@elseif($emp->id_sf == 1)
<span class=" has-text-primary is-large " style="margin-right: 150px;">Marié</span>
@else
<span class=" has-text-primary is-large"style="margin-right: 150px;">Divorcé</span>
@endif </p>
<p><strong>Adresse</strong> {{$emp->adresse}}  </p>

<p><strong>Groupe sanguin </strong>   @if($emp->id_gr == 0)
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
<p><strong>RH </strong> {{$emp->RH}} </p>
 <p><strong>NSS </strong> {{$emp->NSS}}</p>
  <strong>situation nationale</strong>
  @if($emp->id_sn == 0)
  <span class=" has-text-primary is-large" style="margin-right: 150px;" />Accompli</span>
    @elseif($emp->id_sn == 1)
      <span class=" has-text-primary is-large " style="margin-right: 150px;"/>Dispensé</span>
    @else
  <span class=" has-text-primary is-large" style="margin-right: 150px;" />Inapte</span>
   @endif
<p><strong>Qualifacations professionnelle</strong> {{$emp->qualifPro}} </p>
<hr>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<h1>Les accidents du travail</h1>

<table>
  <tr>
    <th>antécédent</th>
    <th>discription</th>
    <th>La date</th>
  </tr>
  @foreach($ante as $at)
<tr>
 <th>{{$at->libelle}}</th>
 <td>{{$at->discription}}</td>
 <td>{{$at->created_at}}</td>
</tr>
@endforeach
</table>

<hr>

<h1>Les accidents du travail</h1>

<table>
  <tr>
    <th>Lieu</th>
     <th>consécuences</th>
      <th>date</th>
  </tr>
  @foreach($acc as $ac)
<tr>
 <th>{{$ac->lieuAcc}}</th>
 <td>{{$ac->consécuences}}</td>
 <td>{{$ac->created_at}}</td>
</tr>
@endforeach
</table>

<hr>

<h1>Les maladies </h1>

<table>
  <tr>
    <th>maladies professionnelles</th>
    <th>date</th>
  </tr>

              @foreach($mal as $ma  )
              @if($ma->id_type == 0)
           <tr>
             <th>{{$ma->libelle}}</th>
             <td>{{$ma->created_at}}</td>
           </tr>
           @endif
            @endforeach
</table>
<br><br>

<table>
  <tr>
    <th>maladies familiales, hereditaires et chroniques</th>
    <th>date</th>
  </tr>

              @foreach($mal as $ma  )
              @if($ma->id_type == 1)
           <tr>
             <th>{{$ma->libelle}}</th>
             <td>{{$ma->created_at}}</td>
           </tr>
           @endif
            @endforeach
</table>





<style>
.page-break {
  page-break-after: allways;
}

table, th, td {
border-bottom: 1px solid #ddd;
  padding: 15px;
  text-align: left;
  border: 1px solid black;
}


</style>
