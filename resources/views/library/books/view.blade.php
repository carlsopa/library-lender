@extends('home')
@section('content')
{{-- {{auth()->id()}} --}}
@foreach($books as $book)

<a href='/books/{{$book->bookId}}'><img src='{{$book->cover}}'/></a>


@endforeach
@endsection