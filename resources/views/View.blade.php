@extends('layouts.main')

@section('main_section')
@push('title')
    <title>View</title>
@endpush
<div class="container-table">
  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  <table class="custom-table">
    <thead>
      <tr>
        <th>Book Title</th>
        <th>Author</th>
        <th>Edition</th>
        <th>No. of Pages</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $book)
        <tr>
          <td>{{ $book->title }}</td>
          <td>{{ $book->author }}</td>
          <td>{{ $book->edition }}</td>
          <td>{{ $book->no_of_pages }}</td>
          <td>
            <a href="{{route('edit',['id'=>$book->id])}}" class="custom-btn custom-btn-edit"><i class="fas fa-edit"></i>  </a>
            <a href="{{route('del',['id'=>$book->id])}}" class="custom-btn custom-btn-delete"><i class="fas fa-trash"></i>  </a> 
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
