<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{  str_replace('-', ' ', config('app.name', 'Laravel'))  }}</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />
    <link href="{{ asset('fontawesome-free-5.15.3-web/css/all.css') }}" rel="stylesheet"/>
    <script src="{{ asset('fontawesome-free-5.15.3-web/js/all.js') }}" type="text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="login-page sidebar-collapse">
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">
                {{  str_replace('-', ' ', config('app.name', 'Laravel'))  }} </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/login" class="nav-link">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Nos siga no Twitter" rel="nofollow">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Junte-se ao nosso Discord" rel="nofollow">
                        <i class="fab fa-discord"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Nos siga no Instagram" rel="nofollow">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="page-header header-filter" style="background-image: url('{{ asset('img/01.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    <form class="form" method="" action="">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Login</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">mail</i>
                                </span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">lock_outline</i>

                                </span>
                                </div>
                                <input placeholder="Senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
{{--                        <div class="g-recaptcha" data-sitekey="6Lc9p_gaAAAAACvxFxhVg6tQEBPzxKRBpYG9wNsJ"></div>--}}

                        <div class="footer text-center">
                            <button class="btn btn-primary btn-link btn-wd btn-lg">Entrar</button>
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
    <footer class="footer">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com/">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/presentation">
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/blog">
                            Blog
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Lvl1 Media, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
            </div>
        </div>
    </footer>
</div>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
<!--   Core JS Files   -->
<script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/moment.min.js') }}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/material-kit.js?v=2.0.7') }}" type="text/javascript"></script>
</body>

</html>
