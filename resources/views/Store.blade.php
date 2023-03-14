@extends('layouts.main')

@section('main_section')
@push('title')
<title>Store</title>
@endpush


  <body>
    
    <div class="container-form">
    <a href="{{ route('view') }}" class=" btn-icon-right">
  <i class="fas fa-eye"></i> 
</a>
      <h2>Add Book Form</h2>
      

      @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ isset($books) ? route('update', ['id' => $books->ID]) : route('store') }}" method="POST" >
    @csrf
    @if (isset($books))
       
    @endif
    <label for="title">Title:</label>
    <input type="text" class="form-control" name="title" value="{{ isset($books) ? $books->Title : old('title') }}">
    <span class="text-danger">
        @error('title')
        {{ $message }}
        @enderror
    </span><br>
    <label for="author">Author:</label>
    <input type="text" id="author" class="form-control" name="author" value="{{ isset($books) ? $books->Author : old('author') }}">
    <span class="text-danger">
        @error('author')
        {{ $message }}
        @enderror
    </span><br>
    <label for="edition">Edition:</label>
    <input type="text" id="edition" name="edition" class="form-control" value="{{ isset($books) ? $books->Edition : old('edition') }}">
    <span class="text-danger">
        @error('edition')
        {{ $message }}
        @enderror
    </span><br>
    <label for="num_pages">Number of Pages:</label>
    <input type="number" id="num_pages" name="num_pages" class="form-control" value="{{ isset($books) ? $books->No_of_Pages : old('num_pages') }}">
    <span class="text-danger">
        @error('num_pages')
        {{ $message }}
        @enderror
    </span><br>

    <button type="submit" class="btn btn-primary">
        @if (isset($books))
            Save Changes
        @else
            Add Book
        @endif
    </button>
</form>

    </div>
  </body>
</html>

@endsection