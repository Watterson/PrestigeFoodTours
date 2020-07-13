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
          <table class="table table-lg table-light table-responsive">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Supplier ID</th>
                <th scope="col">Cost</th>

              </tr>
            </thead>
            <tbody>
              @foreach($prizes as $key => $prize)
              <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{$prize->title}}</td>
                <td>{{$prize->description}}</td>
                <td>{{$prize->supplier_id}}</td>
                <td>{{$prize->cost}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
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
        <div class="card-body">
          <form method="POST" action="{{ route('create-prize') }}">
              @csrf


              <div class="col-12 ">
                <div class="form-group row">
                    <label for="title" class="col-lg-4 col-md-5 col-form-label text-md-right">Title</label>

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
                    <label for="description" class="col-lg-4 col-md-5 col-form-label text-md-right">Description</label>

                    <div class="col-lg-8 col-md-6">
                        <textarea id="description"  class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" rows=3 autofocus></textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="supplier" class="col-lg-4 col-md-5 col-form-label text-md-right">Supplier</label>

                    <div class="col-lg-8 col-md-6">
                        <select id="supplier" class="form-control @error('supplier') is-invalid @enderror"  name="supplier" required autocomplete="supplier" autofocus>
                            <option value="0"selected>Choose...</option>
                             @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->title}}</option>
                            @endforeach
                        </select>
                        @error('supplier')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cost" class="col-lg-4 col-md-5 col-form-label text-md-right">Cost</label>

                    <div class="col-lg-8 col-md-6">
                        <input id="cost" type="text" class="form-control @error('cost') is-invalid @enderror" name="cost" value="{{ old('cost') }}" required autocomplete="cost" autofocus>

                        @error('cost')
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


          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->

</div>
@endsection
