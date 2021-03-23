<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script type="text/javascript">
    $(document).ready(function (e){
        $("#addBtn").on("click", function (e) {
            e.preventDefault();
            $.ajax({
                type : 'POST',
                url : '{{ route('users.store') }}',
                data : $('#addForm').serialize(),
                success: function (data){
                    location.reload();
                },
                error : function (data) {
                    /* Ako je nastala greška prikaži ih */
                    let json = data.responseJSON;
                    $("input").removeClass("is-invalid");
                    $(".invalid-feedback").remove();
                    for (var key in json["errors"]){
                        $("#" + key).addClass("is-invalid")
                        $("#" + key).after("<span class='invalid-feedback' role='alert'><strong>"+json["errors"][key]+"</strong></span>")   
                    }
                    console.log(json);
                }
            });
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function (e){
        $("#addbooksBtn").on("click", function (e) {
            e.preventDefault();
            $.ajax({
                type : 'POST',
                url : '{{ route('addbooks.store') }}',
                data : $('#addbooksForm').serialize(),
                success: function (data){
                    location.reload();
                },
                error : function (data) {
                    /* Ako je nastala greška prikaži ih */
                    let json = data.responseJSON;
                    $("input").removeClass("is-invalid");
                    $(".invalid-feedback").remove();
                    for (var key in json["errors"]){
                        $("#" + key).addClass("is-invalid")
                        $("#" + key).after("<span class='invalid-feedback' role='alert'><strong>"+json["errors"][key]+"</strong></span>")   
                    }
                    console.log(json);
                }
            });
        });
    });
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <form class="form-inline my-2 my-lg-0" type="get" action=" {{ url('/finder') }}">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="query"placeholder="Pretražite knjige"  style="width: 800px">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary" style="border-radius: 0px 0.25rem 0.25rem 0px">  
                                    <span class="search">Pretraži</span>
                                </button>
                            </span>
                        </div>
                    </form>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    
                        <!-- Authentication Links -->
                        <li class="nav-item">
                    <a class="nav-link" href="{{route('Books')}}">
                        Knjige
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i></a>
                </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name. " " . Auth::user()->surname }}
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('account', Auth::user()->id) }}">
                                        {{ __('Moj račun') }}
                                    </a>
                                @superAdministrator
                                    <a class="dropdown-item" href="{{ route('users') }}">
                                        {{ __('Korisnici') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('addbooks') }}">
                                        {{ __('Dodavanje knjiga') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('orders') }}">
                                        {{ __('Narudžbe') }}
                                    </a>
                                    @endsuperAdministrator
                                    @administrator
                                    <a class="dropdown-item" href="{{ route('addbooks') }}">
                                        {{ __('Dodavanje knjiga') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('orders') }}">
                                        {{ __('Narudžbe') }}
                                    </a>
                                    @endadministrator
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div><br>
    
    <main>
            @yield('content')
    </main><div class="wrapper">
    </div>

<!-- Footer -->

<footer class="bg-dark text-center text-white"style="bottom: 0px">
  <div class="container p-1">
    <section class="mb-1">
      <a class="btn btn-outline-light btn-floating m-1" href="https://drive.google.com/file/d/1hKYFvV9aNhiJ7Xdkxov8dsOkGH2cHD7D/view?usp=sharing" role="button"
        >Vizija</a>
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/g4book/PZI-Bookstore" role="button"
        >Github</a>
      <a class="btn btn-outline-light btn-floating m-1" href="about" role="button"
        >O nama</a>
    </section>
    </div>
  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright: Dario Dominković & Silvio Pejić
  </div>
  
</footer></div>
<!-- Footer -->


</body>
</html>