@extends('layout')
@section('content')
	<h2>List of authors</h2>
	@foreach ($author as $author)
		<li>
			<a href="/authors/{{$author->id}}">
			{{$author->firstName. ' '.$author->lastName}}
			</a>
		</li>
	@endforeach
	<a href="/authors/create">Add new author</a>
@endsection()