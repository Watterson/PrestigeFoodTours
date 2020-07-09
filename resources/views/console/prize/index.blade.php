@extends('layouts.admin')



@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Prizes</h1>
  </div>




  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-gray-900">
          <h6 class="m-0 font-weight-bold text-light">Prizes Overview</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-area">

          </div>
        </div>
      </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-gray-900">
          <h6 class="m-0 font-weight-bold text-light">Suppliers</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4 pb-2">
            <canvas id="myPieChart"></canvas>
          </div>
          <div class="mt-4 text-center small">
            <span class="mr-2">
              <i class="fas fa-circle text-primary"></i> Food
            </span>
            <span class="mr-2">
              <i class="fas fa-circle text-success"></i> Travel
            </span>
            <span class="mr-2">
              <i class="fas fa-circle text-info"></i> Equipment
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Add Prize -->
    <div class="col-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-gray-900">
          <h6 class="m-0 font-weight-bold text-light">Add Prize</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body ">
          <form method="POST" action="{{ route('login') }}">
              @csrf
            <div class=" row">

              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group row">
                    <label for="title" class="col-lg-3 col-md-5 col-form-label text-md-right">Title</label>

                    <div class="col-lg-8 col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-lg-3 col-md-5 col-form-label text-md-right">Description</label>

                    <div class="col-lg-8 col-md-6">
                        <textarea id="description" type="text-area" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" rows=3 autofocus></textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-lg-3 col-md-5 col-form-label text-md-right">Category</label>

                    <div class="col-lg-8 col-md-6">
                        <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="people" class="col-lg-3 col-md-5 col-form-label text-md-right">Group Size</label>

                    <div class="col-lg-8 col-md-6">
                        <input id="people" type="text" class="form-control @error('people') is-invalid @enderror" name="people" value="{{ old('people') }}" required autocomplete="people" autofocus>

                        @error('people')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group row">
                  <label for="prize" class="col-lg-3 col-md-5 col-form-label text-md-right">Prize</label>

                  <div class="col-lg-8 col-md-6">
                      <!-- <input id="prize" type="text" class="form-control @error('prize') is-invalid @enderror" name="prize" value="{{ old('prize') }}" required autocomplete="prize" autofocus> -->
                      <select id="prize" class="form-control @error('prize') is-invalid @enderror" ame="prize" required autocomplete="prize" autofocus>
                        <option>Default select</option>
                      </select>
                      @error('prize')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="entry-price" class="col-lg-3 col-md-5 col-form-label text-md-right">Entry-price</label>

                  <div class="col-lg-8 col-md-6">
                      <input id="entry-price" type="text" class="form-control @error('entry-price') is-invalid @enderror" name="entry-price" value="{{ old('entry-price') }}" required autocomplete="entry-price" autofocus>

                      @error('entry-price')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="entry-total" class="col-lg-3 col-md-5 col-form-label text-md-right">Entries</label>

                  <div class="col-lg-8 col-md-6">
                      <input id="entry-total" type="text" class="form-control @error('entry-total') is-invalid @enderror" name="entry-total" value="{{ old('entry-total') }}" required autocomplete="entry-total" autofocus>

                      @error('entry-total')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                <label for="expire" class="col-lg-3 col-md-5 col-form-label text-md-right">Expires</label>
                <div class="col-lg-8 col-md-6">
                  <input class="form-control @error('expire') is-invalid @enderror" type="datetime-local" id="expire" value="{{ old('entry-total') }}" required autocomplete="entry-total" autofocus>
                </div>
              </div>


              <div class="form-group row mb-0">
                  <div class="col-md-8 offset-lg-4 offset-md-5">
                      <button type="submit" class="btn btn-warning">
                          Submit
                      </button>


                  </div>
              </div>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>


  </div>
</div>
@endsection
