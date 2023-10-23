<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Besterio @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css2/libs/animate.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- <link media="all" type=text/css rel="stylesheet" href="https://farmart.botble.com/themes/farmart/css/style.css?v=1.17.0"> --}}

    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">


        <nav class="navbar upper navbar-expand-lg" style="height:42px; background-color: #f7f7f7; border-bottom:1px solid rgba(0, 0, 0, 0.404); ">
            <div class="container-fluid">
              {{-- <a class="navbar-brand" href="#">About Us</a> --}}
              <span class="navbar-toggler" type="span" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </span>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" style="font-size: 13px" aria-current="page" href="#">About US |</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="font-size: 13px" href="#">Wishlist |</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="font-size: 13px" href="#">Order Tracking |</a>
                  </li>
                </ul>
                <span class="navbar-text " style="">
                    <div class="d-flex me-5">
                        <div>
                            <img src="https://farmart.botble.com/vendor/core/core/base/images/flags/vn.svg" width="20px" alt="">
                        <span style="font-size: 13px">Tiếng Việt |</span>
                        </div>
                        <div class="ms-2">
                            <img src="https://farmart.botble.com/vendor/core/core/base/images/flags/sa.svg" width="20px" alt="">
                            <span style="font-size: 13px">Arabic |</span>
                        </div>


                        <div class="dropdown ms-2">
                            <span class="dropbtn">USD <i class="fa-solid fa-caret-down"></i> </span><span class="ms-2">|</span>
                            <div class="dropdown-content">
                            <a href="#">EUR</a>
                            <a href="#">VND</a>

                            </div>
                        </div>
                        <span class="ms-3" style="display: flex">

                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))

                                            <a class="nav-link ms-2" style="font-size: 13px" href="{{ route('login') }}">{{ __('Login  |') }}</a>

                                    @endif

                                    @if (Route::has('register'))

                                            <a class="nav-link ms-2" style="font-size: 13px" href="{{ route('register') }}">{{ __('Register') }}</a>

                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="span" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          Hi  {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

                        </span>
                    </div>



                </span>
              </div>
            </div>
          </nav>

        <nav class="navbar navbar-expand-lg navbar-light " style="background: white; border-bottom:1px solid rgb(179, 178, 178)" >
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">

             <h3 class=""> BESTERIO</h3><span class="" style="font-size: 20px; color:#ffc107;">GROCERY .</span>
                </a>
              <span class="border-0" type="span" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler fas fa-bars text-white border-0"></span>
              </span>
              <div class="collaps navbar-collapse" id="navbarText">
                <ul class="navbar-nav m-auto d-flex justify-content-center">
                    <form class="d-flex">
                        <input class="form-contro inptuBox" size="80"  type="search" placeholder="Search" aria-label="Search">
                        <button style="border-bottom-right-radius: 7px; border-top-right-radius: 7px; border:none; width:50px;" class=""  type="submit"><i class="fa fa-search"></i></button>
                      </form>
                </ul>
                <span class="navbar-text">



                    <div class="d-flex fav ">

                       <div>
                        <h5>8 800 332 65-66</h5>
                        <span>support 24/7</span>
                       </div>

                            <div class="ms-3">
                                <i class="fa-solid fa-repeat">
                                    <span class="position-absolute top-30 start-150 translate-middle badge rounded-pill " style="background: #fab528; font-size:10px;">
                                        0
                                        <span class="visually-hidden">unread messages</span>
                                      </span>
                                </i>
                                <i class="fa-regular fa-heart">
                                    <span id="cart-badge" class="position-absolute top-30 start-150 translate-middle badge rounded-pill " style="background: #fab528; font-size:10px;">
                                        0
                                        <span class="visually-hidden">unread messages</span>
                                      </span>
                                </i>
                                <a href="{{  route('cart.view') }}">
                                <i class="fa-solid fa-cart-shopping">
                                    @php
                                    $cartCount = count(session('cart', []));
                                @endphp
                                @if($cartCount > 0)


                                <span class="position-absolute top-30 start-150 translate-middle badge rounded-pill " style="background: #fab528; font-size:10px;">
                                    {{ $cartCount }}
                                    <span class="visually-hidden">unread messages</span>
                                  </span>
                                    {{-- <span class="badge"></span> --}}
                                @endif
                                <span class="position-absolute top-30 start-150 translate-middle badge rounded-pill " style="background: #fab528; font-size:10px;">
                                    {{ $cartCount }}
                                </span>

                                </i>
                            </a>
                            </div>

                        <div>
                            <div class="ms-4">
                            <span class="">
                                Your Cart
                              <p> $0.00</p>
                            </span>
                        </div>
                    </div>


                </span>
              </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light " style="background: white">
            <div class="container-fluid">
              <div style="padding: 13px; width:210px; border-radius:7px; background:#fab528; text-transform: uppercase; font-weight:bold;">
                <i class="fa-solid fa-bars"></i> Shop by Category
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto ms-5 mb-2 mb-lg-0 dey">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#"><i class="fa-solid fa-tag"></i>Special Price</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pages <i class="fa-solid fa-angle-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Shop <i class="fa-solid fa-angle-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Stores </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">FAQS <i class="fa-solid fa-angle-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact <i class="fa-solid fa-angle-down"></i></a>
                  </li>
                </ul>
                <span class="navbar-text" style="font-weight: bold">
                <i class="fa fa-repeat"></i>     Recently viewed
                </span>
              </div>
            </div>
          </nav>






        <main class="py-2">
            @yield('content')
        </main>
    </div>







    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
@extends("layouts.footer")
