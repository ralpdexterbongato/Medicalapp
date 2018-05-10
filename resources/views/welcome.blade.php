<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>SNVI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url("/images/background.jpg");
                background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .example1 {
 height: 50px;
 overflow: hidden;
 position: relative;
}
.example1 h1 {
 font-size: 4em;
 color: hsl(204, 86%, 53%);
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);
 transform:translateX(100%);
 /* Apply animation to this element */
 -moz-animation: example1 15s linear infinite;
 -webkit-animation: example1 15s linear infinite;
 animation: example1 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes example1 {
 0%   {
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%);
 }
 100% {
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%);
 }
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                    @else
                        <a href="{{ route('login') }}" class="button is-info is-large is-rounded is-focused">
s'identifier</a>
                    @endauth
                </div>
            @endif


            <div class="content">
              <div class="example1">
<h1>Gestion de la médecine du travail</h1>
</div>
              <div class="title m-b-md">
  <img src="{{url('/images/SNVI_Logo_6.svg.png')}}" alt="" style="height: 250px; width:250px">
              </div>

@auth
                <div class="links">
                  <a type="submit" class="button is-info is-large is-rounded is-focused"   href="/emp"  >
                    <i class="fa fa-address-card" aria-hidden="true"></i>  DOSSIERS MEDICAL
                  </a>

                    <a type="submit" class="button is-info is-large is-rounded is-focused"   href="/emp/add"  >
                  <i class="fa fa-user-plus" aria-hidden="true"></i>  NOUVEAU DOSSIER
                    </a>

                    <a type="submit" class="button is-info is-large is-rounded is-focused"   href="/visite"  >
                      <i class="fa fa-list" aria-hidden="true"></i>   VISITES MEDICALES
                    </a>

                    <a type="submit" class="button is-info is-large is-rounded is-focused"   href="/newvisite"  >
                      <i class="fa fa-stethoscope" aria-hidden="true"> </i>  NOUVELLE VISITE
                    </a>
                </div>
                <hr>
      <div class="links">
        <a type="submit" class="button is-info is-large is-rounded is-focused"   href="/visite/pdf/print"  >
      <i class="fa fa-print" aria-hidden="true"></i> Imprimer la liste des visites
        </a>

        <a type="submit" class="button is-info is-large is-rounded is-focused"   href="/stats"  >
          <i class="fa fa-users" aria-hidden="true"></i></i> statistiques
        </a>
      </div>
            </div>
@else

            <a href="{{ route('login') }}" class="button is-info is-large is-rounded is-focused">
s'identifier</a>
@endauth
        </div>
          <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
