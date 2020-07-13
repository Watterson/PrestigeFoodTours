@extends('layouts.admin')



@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Competition</h1>
  </div>


  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-gray-900">
          <h6 class="m-0 font-weight-bold text-light">Build Competition</h6>
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
          <form method="POST" action="{{ route('create-comp') }}">
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
                  <label for="start" class="col-lg-3 col-md-5 col-form-label text-md-right">Runtime:</label>
                  <div class="col-lg-8 col-md-6">
                    <input class="form-control @error('start') is-invalid @enderror" type="text" name="datetimes" id="start" value="{{ old('start') }}" required autocomplete="start" autofocus>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group row">
                  <label for="prize" class="col-lg-3 col-md-5 col-form-label text-md-right">Prize</label>

                  <div class="col-lg-8 col-md-6">
                      <!-- <input id="prize" type="text" class="form-control @error('prize') is-invalid @enderror" name="prize" value="{{ old('prize') }}" required autocomplete="prize" autofocus> -->
                      <select id="prize" class="selectpicker form-control @error('prize') is-invalid @enderror" ame="prize" required autocomplete="prize" autofocus multiple data-live-search="true">
                        @foreach($prizes as $key => $prize)
                          <option value="{{$prize->id}}">{{$prize->title}}</option>
                        @endforeach
                      </select>

                      @error('prize')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="total-entries" class="col-lg-3 col-md-5 col-form-label text-md-right">Total Entries</label>

                  <div class="col-lg-8 col-md-6">
                      <input id="total-entries" type="text" class="form-control @error('total-entries') is-invalid @enderror" name="total-entries" value="{{ old('total-entries') }}" required autocomplete="total-entries" autofocus>

                      @error('total-entries')
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
