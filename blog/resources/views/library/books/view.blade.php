@extends('home')
@section('content')
{{-- {{auth()->id()}} --}}
@foreach($books as $book)
<li><a href='/books/{{$book->bookId}}{{-- {{$book->bookId}} --}}'>{{$book->title}}</a></li>

@endforeach
@endsection