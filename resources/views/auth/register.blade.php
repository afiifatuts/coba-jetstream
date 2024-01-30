
<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Register</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{ asset('assets/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

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
              <div class="col-lg-6 col-xl-5 col-md-10 ">
                <div class="card card-default mb-0">
                  <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                      <a class="w-auto pl-0" href="/">
                        <span class="brand-name text-dark">Welcome!!</span>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-5 pb-5 pt-0">
                    <h4 class="text-dark text-center mb-5">Sign Up</h4>
                    <x-validation-errors class="mb-4 text-danger" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="row">
                        <div class="form-group col-md-12 mb-4">
                            <label for="name">Name</label>
                          <input type="text" class="form-control input-lg" id="name" name="name" aria-describedby="nameHelp" :value="old('name')" placeholder="Name" autofocus required>
                        </div>
                        <div class="form-group col-md-12 mb-4">
                            <label for="email">Email</label>
                          <input type="email" name="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" required placeholder="Email">
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="password">Password</label>
                          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="New Password">
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="password_confirmation">Confirm Password</label>
                          <input type="password" class="form-control input-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <div class="col-md-12">
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())

                          <div class="d-flex justify-content-between mb-3">


                            <div class="custom-control custom-checkbox mr-3 mb-3">
                              {{-- <input type="checkbox" class="custom-control-input" name="terms" id="terms" required > --}}
                              <x-checkbox name="terms" id="terms" required />

                              {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm">Terms of Service</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600">Privacy Policy</a>',
                        ]) !!}

                              {{-- <label class="custom-control-label" for="customCheck2">I Agree the


                                <a target="_blank" href="'.route('terms.show').'">Terms of Service</a>
                                 and

                                 <a target="_blank" href="'.route('policy.show').'">
                                    Privacy Policy</a>.</label> --}}
                            </div>

                          </div>
                          @endif

                          <button type="submit" class="btn btn-primary btn-pill mb-4">Sign Up</button>

                          <p>Already have an account?
                            <a class="text-blue" href="{{ route('login') }}">Sign in</a>
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
