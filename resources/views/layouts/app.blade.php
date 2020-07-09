<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Prestige Foods') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/marketplace.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div id="app">
      <div class="navbar-wrapper navbar-expand navbar-fixed-top bg-dark" style="background-color: transparent;">
        <div class="container">

          <nav class="navbar navbar-expand-lg  navbar-default ">
            <a class="navbar-brand" href="/"><img src="{{asset('img/catering-logo.png')}}" alt="Logo" class="img" style="max-height: 45px"> PrestigeFood</a>
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
                        <a  class="dropdown-item" href="{{ route('account') }}" >{{ Auth::user()->name }}</a>
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
                <a class="nav-link shopping-cart " href="{{route('cart')}}"><i class="la la-shopping-cart"></i> &pound;0.00</a>
                </li>

              </ul>

              </div>
            </div>
          </nav>
        </div>
      </div>
        <main class="py-4 ">
            @yield('content')
        </main>
        <footer class="site-footer bg-dark">
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
                <a href="https://github.com/Watterson">Rory Watterson</a>.
                   </p>
                 </div>

                 <div class="col-md-4 col-sm-6 col-xs-12">
                   <ul class="social-icons">
                     <li><a class="facebook" href="{{route('fb')}}"><i class="fa fa-facebook"></i></a></li>
                     <li><a class="twitter" href="{{route('tw')}}"><i class="fa fa-twitter"></i></a></li>
                     <li><a class="instagram" href="{{route('insta')}}"><i class="fa fa-instagram"></i></a></li>
                     <li><a class="linkedin" href="{{route('link')}}"><i class="fa fa-linkedin"></i></a></li>
                   </ul>
                 </div>
               </div>
             </div>
        </footer>
    </div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/marketplace.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</html>
