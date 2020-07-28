@extends('layouts.marketplace')

@section('css-includes')
<link href="{{ asset('css/single-comp.css') }}" rel="stylesheet">

@endsection
@section('header')
<header class="single-comp-header">
  <div class="container page-description">
    <h1>{{$comp[0]->title}}</h1>
    <p>{{$comp[0]->description}}</p>
  </div>
</header>
@endsection
@section('content')

<div class="single_product">
        <div class="container" style=" background-color: #fff; padding: 11px;">
            <div class="row">
                <!-- <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg" alt=""></li>
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_2.jpg" alt=""></li>
                        <li data-image="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713228/single_3.jpg" alt=""></li>
                    </ul>
                </div> -->
                <div class="col-lg-6  order-1">
                    <div class="image_selected">
                      @if($comp[0]->image)
                      <img class=" img-fluid" src="{{asset('/img/'.$comp[0]->image)}}" alt="Card image cap">
                      @else
                      <img class=" img-fluid" src="{{asset('/img/big-windows.jpg')}}" alt="Card image cap">
                      @endif

                    </div>
                </div>
                <div class="col-lg-6 order-2">
                    <div class="product_description">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/competitions')}}">Competitions</a></li>
                                <li class="breadcrumb-item active">{{$comp[0]->title}}</li>
                            </ol>
                        </nav>
                        <input type="hidden" id="competition-id" value="{{$comp[0]->id}}">
                        <div id="competition-title" class="product_name">{{$comp[0]->title}}</div>
                        <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 1 Michelin Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                        <div> <span id="entry-price" class="product_price">&#163;{{$comp[0]->entry_price}}</span>  <span style='color:black'>per entry<span> </div>
                        <div> <span class="product_saved">Total entries:</span> <span style='color:black'>{{$comp[0]->total_entries}}<span> </div>
                        <hr class="singleline">
                        <div >
                          <span class="product_info">{{$comp[0]->description}}<span>
                          <br>
                          <span class="product_info">Prizes:<span>
                          <br>
                          @foreach($comp[0]->titleArray as $key => $prizeTitle)
                          <span class="product_info">{{$prizeTitle}}<span>
                          <br>
                          @endforeach

                        </div>
                        <div>
                            <!-- <div class="row">
                                <div class="col-md-5">
                                    <div class="br-dashed">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-3"> <img src="https://img.icons8.com/color/48/000000/price-tag.png"> </div>
                                            <div class="col-md-9 col-xs-9">
                                                <div class="pr-info"> <span class="break-all">Get 5% instant discount + 10X rewards @ RENTOPC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7"> </div>
                            </div> -->
                            <!-- <div class="form-group col-6 mt-1">
                              <label for="answer">Example Question:</label>
                              <select  class="form-control" id="answer">
                                <option value="1">Answer 1</option>
                                <option value="2">Answer 2</option>
                                <option value="3">Answer 3</option>
                              </select>
                            </div> -->

                            <!-- <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">RAM Options</span><br> <button class="btn btn-primary btn-sm">4 GB</button> <button class="btn btn-primary btn-sm">8 GB</button> <button class="btn btn-primary btn-sm">16 GB</button> </div>
                                <div class="col-xs-6" style="margin-left: 55px;"> <span class="product_options">Storage Options</span><br> <button class="btn btn-primary btn-sm">500 GB</button> <button class="btn btn-primary btn-sm">1 TB</button> </div>
                            </div> -->
                        </div>
                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div id="payment-routes" class="row">
                          @if(in_array($comp[0]->id, $compIds))
                          <a role="button" id="goToCheckout" href="{{route('cart')}}" class="btn btn-success shop-button" >Check Out</a>
                          @else
                          <a role="button" id="goToCheckout" href="{{route('cart')}}" class="btn btn-success shop-button" style="display:none" >Check Out</a>

                          <div class="form-group col-6 my-2">
                            <label for="answer">Example Question:</label>
                            <select  class="form-control" id="answer">
                              <option disabled selected>Select Answer</option>
                              <option value="false" >Answer 1</option>
                              <option value="true">Answer 2</option>
                              <option value="false">Answer 3</option>
                            </select>
                          </div>
                          <div class="col-2 ">
                            <i class="fas fa-check-circle py-5" id="correct" style="display:none"></i>
                            <i class="far fa-times-circle py-5 " id="wrong" style="display:none"></i>
                          </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 mb-2" >
                              <div class="form-group ">
                                <label for="quantity">Quantity:</label>
                                  <select id="quantity" class="form-control">
                                    @for($i = 1; $i < 11; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                  </select>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12  text-center">
                              <h3>Total:</h3>
                              <h4 id="price" >&#163;{{$comp[0]->entry_price}}</h4>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 text-center">

                              <button type="button" id="addToCart" class="btn btn-warning shop-button">Add To Cart</button>
                              <button type="button" id="buyNow" class="btn btn-success shop-button">Buy Now</button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">Prizes In Competition</span> </div>
                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="col-md-12">
                        <tbody>
                          @foreach($prizes as $prize)
                            <tr class="row mt-10">
                                <td class="col-md-4"><h4 class="p_specification">{{$prize->title}}</h4> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li><h6>{{$prize->description}}</h6></li>
                                    </ul>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row row-underline">
                <div class="col-md-6">
                  <span class=" deal-text">Other Competitions</span>
                </div>
                <div class="col-md-6">
                  <a href="" data-abc="true">
                    <span class="ml-auto view-all"></span>
                  </a>
                </div>
            </div>
            <div class="row">
              @foreach($otherComps as $otherComp)
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-4" >
                  	<div class="card card-product">
                  		<div class="img-wrap">
                        @if($otherComp->image)
                        <img  src="{{asset('/img/'.$otherComp->image)}}" alt="Card image cap">
                        @else
                        <img src="{{asset('/img/big-windows.jpg')}}" alt="Card image cap">
                        @endif
                         <!-- <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a> -->
                  		</div>
                  		<div class="info-wrap">
                        <div class="row">
                          <div class="col-8">
                    			     <h4 class="title text-dots pl-3">{{$otherComp->title}}</h4>
                          </div>
                          <div class="col-4">
                            <h3 >&#163;{{$otherComp->entry_price}}</h3>
                          </div>
                        </div>
                  			<div class="action-wrap text-center ">
                  				<a href="{{url('/competitions/'.$otherComp->id)}}" class="btn btn-warning btn-md "> Veiw Competition </a>
                  				<div class="price-wrap h5">
                  				</div> <!-- price-wrap.// -->
                  			</div> <!-- action-wrap -->
                  		</div>
                  	</div> <!-- card // -->
                </div> <!-- col // -->
                @endforeach

             </div><!-- row // -->
      </div>
  </div>
@endsection

@section('js-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js" crossorigin="anonymous"></script>
<script>

const compIds = '<?php echo json_encode($compIds); ?>';

</script>
@endsection
