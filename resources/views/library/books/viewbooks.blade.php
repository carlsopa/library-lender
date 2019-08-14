@extends('home')
@section('content')
{{-- @foreach($authors as $author)
<li><a href='{{$author->authorId}}'>{{$author->author_firstName.' '.$author->author_lastName}}</a></li>

@endforeach --}}
{{-- @foreach($authors as $author)
{{$firstname = $author->author_firstName}} --}}
{{-- @endforeach --}}
@foreach($books as $book)
	<img src='{{$book->cover}}'/>
	Title: {{$book->title}}</br>
		@foreach($authors as $author)
			Author: {{$author->author_Name}}</br>
		@endforeach
	Description: {{$book->description}}
@endforeach
<br />Your Rating: &#9734
{{-- {{$firstname}} --}}
{{-- Title: {{ $books->title}}</br> --}}
{{-- Author: {{}} --}}

@endsection