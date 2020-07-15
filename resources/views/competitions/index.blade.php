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

<section class="content-section" id="all-comp">
  <div class="container">
    <div class=" row justify-content-center">
      @foreach($competitions as $comp)
      <div class=" col-lg-3 col-md-4 col-sm-6 py-5 ">
        <div class="card   ">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$comp->title}}</h5>
            <p class="card-text">{{$comp->description}}</p>
            <p class="card-text">&#163;{{$comp->entry_price}}</p>
            <a href="#" class="btn btn-primary">Enter Competition</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
