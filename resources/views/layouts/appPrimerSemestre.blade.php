<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="Consultar tus materias con sus respectivas condiciones">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admisiones y registro</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.ico" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.min.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.min.css?v=1.0.0" rel="stylesheet">
        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    </head>
    <body class="{{ $class ?? '' }}">


        <div class="main-content">
          <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark" style="background-color: #fff200; border-bottom: 5px solid #4c4b4b; border-top: 26px solid black;">
              <div class="container px-4">
                  <a class="navbar-brand" href="{{ url('materias-estudiantes-de-primer-semestre') }}">
                      <img src="{{ asset('argon') }}/img/brand/logo-ayr.png" alt="logo_uniandes"  />
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar-collapse-main">
                      <!-- Collapse header -->
                      <div class="navbar-collapse-header d-md-none">
                          <div class="row">
                              <div class="col-6 collapse-brand">
                                  <a href="{{ route('home') }}">
                                      <img src="{{ asset('argon') }}/img/brand/black.png">
                                  </a>
                              </div>
                              <div class="col-6 collapse-close">
                                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                      <span></span>
                                      <span></span>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <!-- Navbar items -->
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                              <a class="nav-link nav-link-icon" href="https://registro.uniandes.edu.co/" rel="noopener">
                                  <span class="nav-link-inner--text">{{ __('Regresar al sitio') }}</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
            @yield('content')
        </div>

        <footer class="py-5">
            <div class="container">
                @include('layouts.footers.nav')
            </div>
        </footer>


        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        @stack('js')

        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112349394-3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-112349394-3');
        </script>
    </body>
</html>
