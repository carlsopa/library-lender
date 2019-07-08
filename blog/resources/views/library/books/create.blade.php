@extends('home')
@section('content')
<form method=POST action='/books'>
	@csrf
	<label for="book_title">Title: </label>
	<input type="text" name="book_title"><br>
	<label for="author_firstName">First Name: </label>
	<input type="text" name="author_firstName"><br>
	<label for="author_lastName">Last Name: </label>
	<input type="text" name="author_lastName"><br>
	<button type="submit">Add book</button>
@endsection()