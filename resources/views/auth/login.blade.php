@extends('layouts.master')

@section('content')
<!-- <div class="container">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class ="input"  cols="20"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button is-primary">
                                    Login
                                </button>

                                <a class="button is-danger" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> -->


<form method="POST" action="{{ route('login') }}">
    @csrf
<section class="hero is-primary is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title has-text-grey">
s'identifier</h3>
        <p class="subtitle has-text-grey">
Veuillez vous connecter pour continuer.</p>
        <div class="box">
          <figure class="avatar">
                <img src="{{url('/images/SNVI_Logo_6.svg.png')}}" alt="" style="height: 100px; width:100px">
          </figure>
          <form>
            <div class="field">
              <div class="control">
                <input class="input is-large" type="email" placeholder="
Votre Email"name="email" value="{{ old('email') }}" required autofocus  autofocus="">
              </div>
            </div>

            <div class="field">
              <div class="control">
                <input class="input is-large" type="password" placeholder="
Votre mot de passe"  name="password" required >
              </div>
            </div>
            <div class="field">
              <label class="checkbox">
                <input type="checkbox">

Souviens de moi
              </label>
            </div>
            <button class="button is-block is-info is-large is-fullwidth">s'identifier</button>
          </form>
        </div>
        <p class="has-text-grey">

Besoin d'aide pour? Contactez le service informatique
        </p>
      </div>
    </div>
  </div>
</section>
</form>

@endsection
