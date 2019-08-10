@extends('home')
@section('content')
<form method=POST action='/authors'>
	@csrf
	{{-- {{csrf_field}} --}}
	<label for="author_firstName">First Name: </label>
	<input type="text" name="author_firstName"><br>
	<label for="author_lastName">Last Name: </label>
	<input type="text" name="author_lastName"><br>
	<button type="submit">Add author</button>
@endsection()