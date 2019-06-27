@extends('layout')
@section('content')
<form method="POST" action="/authors/{{$author->id}}">
	@method('PATCH');
	{{-- {{method_field('PATCH')}} --}}
	{{csrf_field()}}
	<label for="firsName">First Name: </label>
	<input type="text" name="firstName" value="{{$author->firstName}}"><br>
	<label for="lastName">Last Name: </label>
	<input type="text" name="lastName" value="{{$author->lastName}}"><br>
	<button type="submit">Update author</button>
</form>
<form method="POST" action="/authors/{{$author->id}}">
	@method('DELETE');
	{{-- {{method_field('DELETE')}} --}}
	{{csrf_field()}}
	<button type="submit">Delete author</button>
</form>

@endsection()