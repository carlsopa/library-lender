@extends('layout')
@section('content')
<h1>{{$author->firstName. ' '.$author->lastName}}</h1>
<a href="/authors/{{$author->id}}/edit">Edit Author</a>

@endsection()