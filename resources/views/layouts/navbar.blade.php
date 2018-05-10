<nav class="navbar is-primary">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
        <img src="{{url('/images/SNVI_Logo_6.svg.png')}}" alt="" style="height: 75px; width:70px">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/">
        Accueil
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" >
          Nouveau
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="/emp/add">
            Dossier Medical
          </a>
          <a class="navbar-item" href="/newvisite">
            Visite
          </a>
        </div>
      </div>
      <a class="navbar-item" href="/stats">
        statistiques
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="bd-tw-button button"  href="/visite">

              <span>
                Visites
              </span>
            </a>
          </p>
          <p class="control">
            <a class="button is-info" href="/emp">

              <span>Dossiers</span>
            </a>
          </p>

          <div class="navbar-item has-dropdown is-hoverable">
            @auth

            <a class="navbar-item" href="/">
             <img src="{{url('/images/doctor.png')}}" alt="" style="height: 90px; width:70px">
            </a>
                     <p class="control">
                       <a class="button is-primary is-large" href="/emp">

                         <span>{{Auth::user()->name}}</span>
                       </a>
                     </p>
                     @endauth
            <div class="navbar-dropdown is-boxed">
              <a class="navbar-item" href="/logout">
                se déconnecter
              </a>
            </div>
          </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</nav>
