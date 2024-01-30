<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Page</title>
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{ asset('assets/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <!-- FAVICON -->
  <link href="{{ asset('assets/images/favicon.png') }}" rel="shortcut icon" />
  <script src="{{ asset('assets/plugins/nprogress/nprogress.js') }}"></script>
</head>
</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-md-10">
                <div class="card card-default mb-0">
                  <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                      <a class="w-auto pl-0" href="/index.html">
                        <span class="brand-name text-dark">Welcome !</span>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-5 pb-5 pt-0">

                    <h4 class="text-dark mb-6 text-center">Sign in for free</h4>
                    <x-validation-errors class="mb-4 text-danger" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                      <div class="row">
                        <div class="form-group col-md-12 mb-4">
                            <label for="email">Email</label>
                            <input  class="form-control input-lg" aria-describedby="emailHelp" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="email">Password</label>
                          <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="col-md-12">

                          <div class="d-flex justify-content-between mb-3">
                            @if (Route::has('password.request'))
                            <a class="text-color" href="{{ route('password.request') }}"> Forgot password? </a>
                            @endif
                          </div>
                          <button type="submit" class="btn btn-primary btn-pill mb-4">Sign In</button>
                          <p>Don't have an account yet ?
                            <a class="text-blue" href="{{ route('register') }}">Sign Up</a>
                          </p>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>
