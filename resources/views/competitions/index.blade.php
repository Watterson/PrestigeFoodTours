@extends('layouts.marketplace')


@section('header')
<header class="comp-header">
  <div class="container page-description">
    <h1>All Competitions</h1>
    <p>Add some text of your choice here the rodger</p>
  </div>
</header>
@endsection
@section('content')
<!-- <section class="content-section " id="latest">
  <div class="container">
    <div class="container text-center my-3">
      <h2 class="font-weight-light">Latest Competitions </h2>
      <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item active">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="{{asset('./img/bluew.webp')}}">
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
              <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        <h5 class="mt-2"></h5>
    </div>
  </div>
</section> -->

<!-- <section class="content-section " id="hot">
  <div class="container">
    <div class="container text-center my-3">
      <h2 class="font-weight-light">Previous Winners</h2>
      <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item active">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="{{asset('./img/bluew.webp')}}">
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
              <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        <h5 class="mt-2"></h5>
    </div>
  </div>
</section> -->

<section class="content-section" id="all-comp">
  <div class="container">
    <div class="card col-lg-3 col-md-4 col-sm-6 col-xs-12" style="width: 18rem;">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</section>
@endsection
