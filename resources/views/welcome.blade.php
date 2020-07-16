

        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/account') }}">Account</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
            @extends('layouts.marketplace')

            @section('header')
            <header class="welcome-header">
              <div class="container page-description">
                <h1>PrestigeFood</h1>
                <p>Add some text of your choice here the rodger</p>
              </div>
            </header>
            @endsection

            @section('content')

            <section class="content-section " id="latest">
              <div class="container">
                <div class="container text-center my-3">
                  <h2 class="font-weight-light">Latest Competitions </h2>
                  <div class="row mx-auto my-auto">
                      <div id="latestCarousel" class="carousel slide w-100" data-ride="carousel">
                          <div class="carousel-inner w-100" role="listbox">

                            @foreach($competitions as $key => $comp)
                              @if($key < 1)
                              <div class="carousel-item active ">
                              @else
                              <div class="carousel-item  ">
                              @endif
                                <div class="col-md-4">
                                  <div class="card" >
                                    @if($comp->image)
                                    <img class="card-img-top img-fluid" src="{{asset('/img/'.$comp->image)}}" alt="Card image cap">
                                    @else
                                    <img class="card-img-top img-fluid" src="{{asset('/img/big-windows.jpg')}}" alt="Card image cap">
                                    @endif
                                    <div class="card-body">
                                      <h5 class="card-title">{{$comp->title}}</h5>
                                      <p class="card-text">{{$comp->description}}</p>
                                      <!-- <form action="{{route('get-comp', ['compId' => $comp->id ])}}" method="POST">
                                        @csrf
                                        <input class="btn btn-warning" type="submit" role="button" value="Enter competition"/>
                                      </form> -->
                                      <a href="{{route('get-comp', ['compId' => $comp->id ])}}" class="btn btn-warning">Enter competition</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endforeach
                          </div>
                          <a class="carousel-control-prev w-auto" href="#latestCarousel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next w-auto" href="#latestCarousel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                    <h5 class="mt-2"></h5>
                </div>
              </div>
            </section>
            <section class="content-section bg-primary text-white text-center services" id="services">
              <div class="container">
                <div class="content-section-heading">
                  <h3 class="text-secondary mb-0">Competitions</h3>
                  <h2 class="mb-5">How to play</h2>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                      <i class="fas fa-pencil-ruler"></i>
                    </span>
                    <h4>
                      <strong>Click on Competition</strong>
                    </h4>
                    <p class="text-faded mb-0">Choose the Bundle you wish to win...</p>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                      <i class="fas fa-money-bill-wave"></i>
                    </span>
                    <h4>
                      <strong>Answer 1 Question</strong>
                    </h4>
                    <p class="text-faded mb-0">Answer a quesion aboout...</p>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                      <i class="fas fa-shipping-fast"></i>
                    </span>
                    <h4>
                      <strong>Payment</strong>
                    </h4>
                    <p class="text-faded mb-0">Pay for an Entry... </p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                      <i class="fas fa-user"></i>
                    </span>
                    <h4>
                      <strong>Your In!</strong>
                    </h4>
                    <p class="text-faded mb-0">Check for an order confirmation email with your entry numbers and tune into the draw to see if you win!</p>
                  </div>
                </div>
              </div>
            </section>
            <section class="content-section " id="latest">
              <div class="container">
                <div class="container text-center my-3">
                  <h2 class="font-weight-light">Previous Winners</h2>
                  <div class="row mx-auto my-auto">
                      <div id="winnerCarousel" class="carousel slide w-100" data-ride="carousel">
                          <div class="carousel-inner w-100" role="listbox">
                              <div class="carousel-item active">
                                  <div class="col-md-4">
                                      <div class="card card-body">
                                          <img class="img-fluid" src="http://placehold.it/380?text=2">
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card card-body">
                                          <img class="img-fluid" src="http://placehold.it/380?text=2">
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card card-body">
                                          <img class="img-fluid" src="http://placehold.it/380?text=3">
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card card-body">
                                          <img class="img-fluid" src="http://placehold.it/380?text=4">
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card card-body">
                                          <img class="img-fluid" src="http://placehold.it/380?text=5">
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card card-body">
                                          <img class="img-fluid" src="http://placehold.it/380?text=6">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <a class="carousel-control-prev w-auto" href="#winnerCarousel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next w-auto" href="#winnerCarousel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                    <h5 class="mt-2"></h5>
                </div>
              </div>
            </section>
            @endsection
