@extends('layouts.app2')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<style>
  .flip-container {
      perspective: 1000;
  }

  .flipper {
      padding: 30px;
      width: 300px;
      height: 250px;
      position: relative;
      background: #f5f5f5;
      -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
      border-radius: 20px;
      transition: 0.6s;
      transform-style: preserve-3d;
  }

  .front,
  .back {
      /*background-color: rgba(0,0,0,.3);*/
      position: absolute;
      padding: 10px 30px;
      top: 0;
      left: 0;
      right: 0;

      backface-visibility: hidden;
  }

  .front {
      z-index: 2;
      /* for firefox 31 */
      transform: rotateY(0deg);
  }

  .back {
      transform: rotateY(180deg);
  }

  .flip {
      transform: rotateY(180deg);
  }

  input {
      width: 100%;
      margin-bottom: 15px;
      height: 30px;
      box-sizing: border-box;
      padding: 10px;
  }

  .title {
      text-align: center;
  }

  .flipbutton {
      color: #4096ee;
      text-decoration: none;
      text-align: left !important;
  }


  /* Alignment styles */

  body,
  html {
      height: 100vh;
  }

  body {
      display: flex;
      justify-content: center;
      align-items: center;
      background-attachment: fixed;
      background-size: 100% 100%;
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../IMG/P.jpg);
      height: 100vh;
  }

</style>
<div class="flip-container">
  <div class="flipper" id="flipper">
      <div class="front">
          <h1 class="title">Login</h1>
          <form action="{{ route('login') }}" method="post">
              @csrf
              <input type="text" placeholder="EMAIL" name="email" value="{{ old('email') }}"/>
              <span style="color: red;">@error('email'){{ $message }}@enderror</span><br>
                  <input type="password" placeholder="Password" name="password" value="{{ old('pwd') }}"/>
                  <span style="color: red;">@error('password'){{ $message }}@enderror</span><br>
                      <input type="submit" value="Login" name="login" />
                  </form>
                  <a class="flipbutton" id="loginButton" href="{{ route('register') }}">Create my account →</a>
              </div>

@endsection
