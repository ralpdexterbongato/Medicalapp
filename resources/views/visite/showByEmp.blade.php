@extends('layouts.master')
@section('content')


  <table class="table container is-bordered is-striped is-narrow is-hoverable is-fullwidth">

  <thead>

  </thead>
  <br>

    <thead>
      <a href="/emp/{{$emp->nEmployé}}" class="button is-info is-pulled-right">retourne vers le dossier</a>
      <tr class=" is-selected ">
        <th><abbr title="matricule">La Date</abbr></th>
        <th>type</th>
        <th><abbr title="Sexe">N Visite</abbr></th>
              <th><abbr title="Sexe">action</abbr></th>

      </tr>
    </thead>
    <tbody>
       @foreach($visite as $v)
      <tr>
    <th>{{$v->created_at}}</th>
    <td>{{$v->typeVisite}}</td>
    <td>{{$v->id_v}}</td>
    <td>    <a type="submit" class="button is-info  is-rounded is-focused" href="/visite/{{$v->id_v}}" >
          <i class="fa fa-eye" aria-hidden="true"></i>  </a>
        </td>

  </tr>

  @endforeach
    </tbody>

</table>

@endsection
