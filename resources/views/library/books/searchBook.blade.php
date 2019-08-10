@extends('home')
@section('content')
@php
$book=$results[0]['volumeInfo']
@endphp
<div class="container">
	<div class="row">
		<div class="col-">
			<img src={{$book['imageLinks']['smallThumbnail']}}/>
		</div>
		<div class="col-sm">
			<h1 class="">{{$book['title']}}</h1><br/>
			@foreach($book['authors'] as $authors)
			{{$authors}}
			@endforeach<br/>
			{{$book['description']}}
		</div>
	</div>
</div>
@endsection