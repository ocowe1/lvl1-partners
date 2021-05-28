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
</head>
<body>
<style>
    #btnParceiro:hover {
        background-color: #9c27b0;
        color:white;
    }
</style>
<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="#">
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
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/lvl1media" target="_blank" data-original-title="Nos siga no Twitter" rel="nofollow">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://discord.gg/8PwZ5pxQmN" target="_blank" data-original-title="Junte-se ao nosso Discord" rel="nofollow">
                        <i class="fab fa-discord"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/lvl1media" target="_blank" data-original-title="Nos siga no Instagram" rel="nofollow">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/01.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Lvl1 Conecta</h1>
                <h4>Agência de publicidade focada em trabalhos com streamers, youtubers e digital influencers. </h4>
                <br>
                <a id="btnParceiro" class="btn btn-link" href="#" style="color: white">Quero me tornar parceiro</a>
            </div>
        </div>
    </div>
</div>
