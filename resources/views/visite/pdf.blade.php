<h1>Les consultations de : {{$X}}</h1>
<h3>Par : {{Auth::user()->name}}</h3>
<hr>

<h1>LA LIST DES CONSULTATIONS:</h1>

<table>
  <tr>
    <th>Numéro de visite</th>
    <th>Numéro d'employée</th>
    <th>Type de visite</th>
    <th>date et heure</th>
  </tr>
  @foreach($data as $d)
<tr>
 <th>{{$d->id_v}}</th>
 <td>{{$d->nEmployé}}</td>
 <td>{{$d->typeVisite}}</td>
  <td>{{$d->created_at}}</td>
</tr>
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
