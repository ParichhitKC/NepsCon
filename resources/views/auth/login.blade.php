<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Register Login Cover Page</title>
    <link rel="icon" type="image/x-icon" href={{asset('asset_back/assets/img/favicon.ico')}}/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href={{asset('assets_back/bootstrap/css/bootstrap.min.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('assets_back/assets/css/plugins.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('assets_back/assets/css/authentication/form-1.css')}} rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href={{asset('assets_back/assets/css/forms/theme-checkbox-radio.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets_back/assets/css/forms/switches.css")}}>
</head>
<body>
<div class="form-container">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">
                    <h1 class="">Log In to <a href="index-2.html"><span class="brand-name">CORK</span></a></h1>
                    <form class="text-left" method="POST" action="{{ route('login') }}">
                        <div class="form"  >
                            @csrf
                            <div id="username-field" class="field-wrapper input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="email" name="email"  @error('email') is-invalid @enderror type="text" class="form-control" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <div id="password-field" class="field-wrapper input mb-2" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper toggle-pass">
                                    <p class="d-inline-block">Show Password</p>
                                    <label class="switch s-primary">
                                        <input type="checkbox" id="toggle-password" class="d-none">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary" value="">Log In</button>
                                </div>
                            </div>

                            <div class="field-wrapper text-center keep-logged-in">
                                <div class="n-chk new-checkbox checkbox-outline-primary">
                                    <label class="new-control new-checkbox checkbox-outline-primary">
                                        <input type="checkbox" class="new-control-input">
                                        <span class="new-control-indicator"></span>Keep me logged in
                                    </label>
                                </div>
                            </div>

                            <div class="field-wrapper">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                    </form>
                        </div>

                </div>
            </div>
        </div>
</div>
<script src={{asset('assets_back/assets/js/libs/jquery-3.1.1.min.js')}}></script>
<script src={{asset('assets_back/bootstrap/js/popper.min.js')}}> </script>
<script src={{asset("assets_back/bootstrap/js/bootstrap.min.js")}}></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src={{asset("assets_back/assets/js/authentication/form-1.js")}}></script>
</body>
</html>
