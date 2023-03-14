@extends('layouts.main')

@section('main_section')
@push('title')
<title>Book Dashboard</title>
@endpush

<div class="container">
  <h1>Book Dashboard</h1>
  <div class="row">
    <div class="col-md-4">
      <div class="card bg-primary text-white mb-3 radius">
        <div class="card-body">
          <h5 class="card-title">Total Books</h5>
          <p class="card-text light">{{ $bookCount}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-success text-white mb-3 radius">
        <div class="card-body ">
          <h5 class="card-title">Available Books</h5>
          <p class="card-text light">300</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-danger text-white mb-3 radius">
        <div class="card-body">
          <h5 class="card-title">Borrowed Books</h5>
          <p class="card-text light">200</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection