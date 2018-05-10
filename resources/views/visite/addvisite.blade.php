@extends('layouts.master')
@section('content')
<div class="container">
  <section class="hero is-info">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
      Une visite pour
        </h1>
        <h2 class="subtitle">
        {{$data->nom}},{{$data->prénom}}
        </h2>
      </div>
    </div>
  </section>
  <hr>

<!-- here istarts -->
<div class="container">

  <div class="field">
    <form method="POST" action="/visite/add" enctype="multipart/form-data">
      {{ csrf_field() }}

    <label class="label">type de visite</label>
    <div class="control">
      <div class="select" >
        <select name="typeVisite">
          <option value="Visite Dambauche">Visite D'ambauche</option>
          <option value="Visite Periodique">Visite Periodique</option>
        </select>
      </div>
        <span class="has-text-danger">{{ $errors->first('id_gr') }}</span>
    </div>
  </div>

<hr>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Poids</label>
      </div>
      <div class="field-body">
        <div class="field">
          <p class="control is-expanded has-icons-left">
            <input class="input" type="text" placeholder="poids/KG" name="poids">
            <span class="icon is-small is-left">
              <i class="fas fa-user-circle"></i>
            </span>
          </p>
        </div>
        <div class="field-label is-normal">
          <label class="label">taille</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="taille/M" name="taille">
              <span class="icon is-small is-left">
                <i class="fas fa-user-circle"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
  </div>
    </div>
<hr>
    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">albumine</label>
      </div>
      <div class="field-body">
        <div class="field">
          <p class="control is-expanded has-icons-left">
            <input class="input" type="text" placeholder="albumine" name="albumine">
            <span class="icon is-small is-left">
              <i class="fas fa-user-circle"></i>
            </span>
          </p>
        </div>
        <div class="field-label is-normal">
          <label class="label">sucre</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="sucre" name="sucre">
              <span class="icon is-small is-left">
                <i class="fas fa-user-circle"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
  </div>
    </div>

    <hr>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">hématies</label>
      </div>
      <div class="field-body">
        <div class="field">
          <p class="control is-expanded has-icons-left">
            <input class="input" type="text" placeholder="albumine" name="hématies">
            <span class="icon is-small is-left">
              <i class="fas fa-user-circle"></i>
            </span>
          </p>
        </div>
        <div class="field-label is-normal">
          <label class="label">ph</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="ph" name="ph">
              <span class="icon is-small is-left">
                <i class="fas fa-user-circle"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
  </div>
    </div>


        <hr>
            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">corpsCétoniques</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <p class="control is-expanded has-icons-left">
                    <input class="input" type="text" placeholder="corpsCétoniques" name="corpsCétoniques">
                    <span class="icon is-small is-left">
                      <i class="fas fa-user-circle"></i>
                    </span>
                  </p>
                </div>
                <div class="field-label is-normal">

                </div>
                <div class="field-body">
                  <div class="field">
                    <p class="control is-expanded has-icons-left">
                      <input class="input is-hidden" type="text" placeholder="PH" >
                      <span class="icon is-small is-left">
                        <i class="fas fa-user-circle"></i>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
          </div>

            <hr>
                <div class="field is-horizontal">
                  <img src="{{url('/images/ear.jpg')}}" alt="" style="height: 200px; width:350px">
                  <div class="field-label is-normal">
                    <label class="label">oreilleDroit</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" placeholder="oreillleDroit" name="oreillleDroit">
                        <span class="icon is-small is-left">
                          <i class="fa fa-deaf" aria-hidden="true"></i>

                        </span>
                      </p>
                    </div>
                    <div class="field-label is-normal">
                    <label class="label">oreilleGauche</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <p class="control is-expanded has-icons-left">
                          <input class="input" type="text" placeholder="oreillleGauche" name="oreillleGauche">
                          <span class="icon is-small is-left">
                            <i class="fa fa-deaf" aria-hidden="true"></i>

                          </span>
                        </p>
                      </div>
                    </div>
                  </div>
              </div>
                </div>


                <hr>
                    <div class="field is-horizontal">
                      <img src="{{url('/images/eye.jpg')}}" alt="" style="height: 200px; width:350px">
                      <div class="field-label is-normal">
                        <label class="label">oeilDroit</label>
                      </div>
                      <div class="field-body">
                        <div class="field">
                          <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" placeholder="oeilDroit" name="oeilDroit">
                            <span class="icon is-small is-left">
                              <i class="fa fa-eye" aria-hidden="true"></i>

                            </span>
                          </p>
                        </div>
                        <div class="field-label is-normal">
                        <label class="label">oeilGauche</label>
                        </div>
                        <div class="field-body">
                          <div class="field">
                            <p class="control is-expanded has-icons-left">
                              <input class="input" type="text" placeholder="oeilGauche" name="oeilGauche">
                              <span class="icon is-small is-left">
                                <i class="fa fa-eye" aria-hidden="true"></i>

                              </span>
                            </p>
                          </div>
                        </div>
                      </div>
                  </div>
                    </div>

                    <div class="field is-horizontal">
                      <div class="field-label is-normal">
                        <label class="label">dePrés</label>
                      </div>
                      <div class="field-body">
                        <div class="field">
                          <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" placeholder="oeilDroit" name="dePrés">
                            <span class="icon is-small is-left">
                              <i class="fa fa-eye" aria-hidden="true"></i>

                            </span>
                          </p>
                        </div>
                        <div class="field-label is-normal">
                        <label class="label">deLoin</label>
                        </div>
                        <div class="field-body">
                          <div class="field">
                            <p class="control is-expanded has-icons-left">
                              <input class="input" type="text" placeholder="deLoin" name="deLoin">
                              <span class="icon is-small is-left">
                                <i class="fa fa-eye" aria-hidden="true"></i>

                              </span>
                            </p>
                          </div>
                        </div>
                      </div>
                  </div>
                    </div>

                    <div class="field is-horizontal">
                      <div class="field-label is-normal">
                        <label class="label">coleurs</label>
                      </div>
                      <div class="field-body">
                        <div class="field">
                          <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" placeholder="coleurs" name="coleurs">
                            <span class="icon is-small is-left">
                              <i class="fa fa-eye" aria-hidden="true"></i>

                            </span>
                          </p>
                        </div>
                        <div class="field-label is-normal">

                        </div>
                        <div class="field-body">
                          <div class="field">
                            <p class="control is-expanded has-icons-left">
                              <input class="input is-hidden" type="text" placeholder="deLoin" >
                              <span class="icon is-small is-left">


                              </span>
                            </p>
                          </div>
                        </div>
                      </div>
                  </div>
                    </div>

                                        <div class="field is-horizontal">
                                          <div class="field-label is-normal">
                                            <label class="label">Droit avec correction</label>
                                          </div>
                                          <div class="field-body">
                                            <div class="field">
                                              <p class="control is-expanded has-icons-left">
                                                <input class="input" type="text" placeholder="droitCOrrection" name="droitCOrrection">
                                                <span class="icon is-small is-left">
                                                  <i class="fa fa-eye" aria-hidden="true"></i>

                                                </span>
                                              </p>
                                            </div>
                                            <div class="field-label is-normal">
                                            <label class="label">Gauche</label>
                                            </div>
                                            <div class="field-body">
                                              <div class="field">
                                                <p class="control is-expanded has-icons-left">
                                                  <input class="input" type="text" placeholder="gaucheCorrection" name="gaucheCorrection">
                                                  <span class="icon is-small is-left">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>

                                                  </span>
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                        </div>


             <div class="field">

              <div class="control">
              <input class="input is-hidden" type="text" value="{{$data->nEmployé}}" name="nEmployé">
              </div>
              </div>

              <div class="field is-grouped is-grouped-right">
              <div class="control">
                <button class="button is-info is-left is-medium ">Enregistrer</button>
              </div>
              </form>
    </div>
</div>
</div>


@endsection
