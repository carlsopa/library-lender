@extends('home')
@section('content')
{{-- {{auth()->id()}} --}}
@foreach($authors as $author)
<li><a href='{{$author->authorId}}'>{{$author->author_firstName.' '.$author->author_lastName}}</a></li>

@endforeach
@endsection