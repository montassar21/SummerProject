<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOM</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('mainassets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('mainassets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('mainassets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('mainassets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('mainassets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('mainassets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('mainassets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('mainassets/css/style.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('mainassets/img/mom.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="{{ asset('mainassets/js/main.js') }}"></script>

</head>

<body>
<!-- Page Preloder -->
<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="header__top__left">
                    <p>MOM website</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="header__top__right">
                    <div class="header__top__links">
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                <ul class="d-flex col-12">
                                    @if (Route::has('login'))
                                        <li class="col-6 text-white list-unstyled">
                                            <a class="dropdown-item" href="{{ route('login') }}">Connexion</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="col-6 text-white list-unstyled">
                                            <a class="dropdown-item" href="{{ route('register') }}">Créer un compte</a>
                                        </li>
                                    @endif
                                    </ul>
                                @else
                                <ul class="d-flex col-12">
                                    <li class="col-6 text-white list-unstyled">
                                        @if(Auth::user()->role=='admin')
                                            <a  class="dropdown-item"  href="/admin/dashboard" role="button" >
                                                {{ Auth::user()->name }}
                                            </a>

                                        @else
                                            <a  class="dropdown-item"  href="/guest/dashboard" role="button" >
                                                {{ Auth::user()->name }}
                                            </a>

                                        @endif
                                    </li>
                                    <li class="col-6 text-white list-unstyled">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                               Deconnexion
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                    </li>
                                </ul>
                                @endguest

                            </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offcanvas Menu Begin0 -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                <ul class="row">
                    @if (Route::has('login'))
                        <li class="list-unstyled">
                            <a class="dropdown-item" href="{{ route('login') }}">Connexion</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="list-unstyled">
                            <a class="dropdown-item" href="{{ route('register') }}">Créer un compte</a>
                        </li>
                    @endif
                    </ul>
                @else
                <ul >
                    <li class="list-unstyled ">
                        @if(Auth::user()->role=='admin')
                            <a  class="dropdown-item"  href="/admin/dashboard" role="button" >
                                {{ Auth::user()->name }}
                            </a>

                        @else
                            <a  class="dropdown-item"  href="/guest/dashboard" role="button" >
                                {{ Auth::user()->name }}
                            </a>

                        @endif
                    </li>
                    <li class="list-unstyled">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                               Deconnexion
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </li>
                </ul>
                @endguest

            </ul>
        </div>
    </div>
    <div class="offcanvas__nav__option">
       <a type="button" data-bs-toggle="modal" data-bs-target="#verticallyCentered"><img src="{{asset('mainassets/img/icon/search.png')}}" alt=""></a>
        @if(Auth::user())
        <a class="row text-decoration-none text-dark" href="/wishlistUser/{{Auth::user()->email}}"><img  src="{{ asset('mainassets/img/icon/heart.png') }}" alt=""><span class="pt-3" style="position: absolute;left:-15px;font-weight:bold;">sélection({{$num}})</span></a>
        @else
        <a class="row text-decoration-none text-dark"  href="/login"><img  src="{{ asset('mainassets/img/icon/heart.png') }}" alt=""><span class="pt-3" style="position: absolute;left:-15px;font-weight:bold;">sélection(0)</span></a>
        @endif
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>MOM website.</p>
    </div>
</div>
<!-- Offcanvas Menu End -->
<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 ">
                <div class="header__logo">
                    <a class="text-dark h4" href="/"><img style="margin-top:-30px;height:90px;width:350px;background-color:transparent" src="{{ asset('mainassets/img/mom.png') }}"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="list active"><a href="/">Accueil</a></li>
                        <li  class="list"><a href="/articles">Articles</a></li>
                        <li  class="list" ><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="/about">Qui sommes nous</a></li>
                                <li><a href="/blog-details">Blog Details</a></li>
                            </ul>
                        </li>
                        <li  class="list"><a href="/blog">Blog</a></li>
                        <li  class="list"><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="searchB">
                <form class="search-box" action="/search" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <input class="search-txt" name="prod" placeholder="Search..." aria-label="Search">
                    <button type="submit" class="search-btn"> <i class="fas fa-search"></i></button></form>
                </div>
                <div class="header__nav__option">
                            @if(Auth::user())
                            <a class="row text-decoration-none text-dark" href="/wishlistUser/{{Auth::user()->email}}"><img  src="{{ asset('mainassets/img/icon/heart.png') }}" alt=""><span class="pt-3" style="position: absolute;left:-15px;font-weight:bold;">sélection({{$num}})</span></a>
                            @else
                            <a class="row text-decoration-none text-dark"  href="/login"><img  src="{{ asset('mainassets/img/icon/heart.png') }}" alt=""><span class="pt-3" style="position: absolute;left:-15px;font-weight:bold;">sélection(0)</span></a>
                            @endif

                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
<div   class="modal fade" id="verticallyCentered" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="/search" method="post" enctype="multipart/form-data">
            @csrf
            <div class="m-3">
                <label class="form-label" for="exampleFormControlInput1"></label>
                <input class="p-4 form-control" name="prod" id="exampleFormControlInput1" placeholder="Rechercher"
                    type="text" >
                @error('prod')
                    <div class="alert alert-danger p-2 m-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="modal-footer">            <button class="btn btn-dark" type="submit">rechercher</button>
                <button class="btn btn-outline-dark" type="button" data-bs-dismiss="modal">Annuler</button></div>
</div>

        </form>
      </div>
    </div>
  </div>
</div>
