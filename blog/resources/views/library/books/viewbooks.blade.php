@extends('home')
@section('content')
{{-- @foreach($authors as $author)
<li><a href='{{$author->authorId}}'>{{$author->author_firstName.' '.$author->author_lastName}}</a></li>

@endforeach --}}
{{-- @foreach($authors as $author)
{{$firstname = $author->author_firstName}} --}}
{{-- @endforeach --}}
@foreach($books as $book)
Title: {{$book->title}}</br>
@foreach($authors as $author)
Author: {{$author->author_firstName. ' '.$author->author_lastName}}
@endforeach
@endforeach
{{-- {{$firstname}} --}}
{{-- Title: {{ $books->title}}</br> --}}
{{-- Author: {{}} --}}

@endsection