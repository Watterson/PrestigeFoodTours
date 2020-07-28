<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PrestigeFood</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('css/marketplace.css') }}" rel="stylesheet">
    @yield('css-includes')
</head>
<body>
    <div id="app">
      <div class="navbar-wrapper navbar-expand navbar-fixed-top bg-dark" style="background-color: transparent;">
        <div class="container">

          <nav class="navbar navbar-expand-lg  navbar-default ">
            <a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}" alt="Logo" class="img" style="max-height: 80px"> PrestigeFood</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link " href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{ route('competitions') }}">Competitions</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{ route('winners') }}">Winners</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{ route('draws') }}">Draws</a>
                </li>
                <li class="nav-item">
                  <div class="dropdown">
                    <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">My Account</a>
                    <div class="dropdown-menu dropdown-menu-left">
                      @guest
                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                      @else
                        @role('administrator')
                        <a  class="dropdown-item" href="{{ route('console') }}" >{{ Auth::user()->name }}</a>
                        @endrole
                        @role('user')
                          <a  class="dropdown-item" href="{{ route('account') }}" >{{ Auth::user()->name }}</a>
                        @endrole
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      @endguest
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                <a class="nav-link shopping-cart " href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i> {{count($cartSession)}}</a>
                </li>

              </ul>

              </div>
            </div>
          </nav>
        </div>
      </div>

        @yield('header')

      <main class="py-4">
          @yield('content')
      </main>
      <footer class="site-footer">
           <div class="container">
             <div class="row">
               <div class="col-sm-12 col-md-6">
                 <h6>About</h6>
                 <p class="text-justify">PrestigeFood.com <i>Fine Dining... </i> Fill with text</p>
               </div>

               <div class="col-xs-6 col-md-3">
                 <h6>Quick Links</h6>
                 <ul class="footer-links">
                   <li><a href="{{ route('latest') }}">Latest Competitions</a></li>
                   <li><a href="{{ route('selling-fast') }}">Selling Fast</a></li>
                   <li><a href="{{ route('recent-winners') }}">Recent Winners</a></li>
                   <li><a href="{{ route('vote-next') }}">Vote For Next Bundles</a></li>
                   <li><a href="{{ route('reveiw') }}">Reveiw</a></li>
                   <li><a href="{{ route('share') }}">Share</a></li>
                 </ul>
               </div>

               <div class="col-xs-6 col-md-3">
                 <h6>Helpful Links</h6>
                 <ul class="footer-links">
                   <li><a href="{{ route('about') }}">About Us</a></li>
                   <li><a href="{{ route('contact') }}">Contact Us</a></li>
                   <li><a href="{{ route('contribute') }}">Contribute</a></li>
                   <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                   <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                 </ul>
               </div>
             </div>
             <hr>
           </div>
           <div class="container">
             <div class="row">
               <div class="col-md-8 col-sm-6 col-xs-12">
                 <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
              <a href="{{route('about')}}">WS</a>.
                 </p>
               </div>

               <div class="col-md-4 col-sm-6 col-xs-12">
                 <ul class="social-icons">
                   <li><a class="facebook" href="{{route('fb')}}"><i class="fa fa-facebook"></i></a></li>
                   <li><a class="twitter" href="{{route('tw')}}"><i class="fa fa-twitter"></i></a></li>
                   <li><a class="instagram" href="{{route('insta')}}"><i class="fa fa-instagram"></i></a></li>
                   <li><a class="linkedin" href="{{route('linkedin')}}"><i class="fa fa-linkedin"></i></a></li>
                 </ul>
               </div>
             </div>
           </div>
      </footer>
    </div>
</body>
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js') }}" defer></script>
@yield('js-includes')
<script src="{{ asset('js/marketplace.js') }}" defer></script>


</html>
