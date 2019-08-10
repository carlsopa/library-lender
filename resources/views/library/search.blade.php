@extends('home')
@section('content')
@foreach($books_to_show as $entries)
	<div class="row mb-2 mt-1">
		<div class="col-xs-4">
			<a href=/books/show/{{$entries['id']}}><img class="w-50 img-thumbnail" src={{$entries['volumeInfo']['imageLinks']['smallThumbnail']}}/></a>
		</div>
		<div class="col-sm">
			<a href=/books/show/{{$entries['id']}}>{{$entries['volumeInfo']['title']}}</a><br/>
			@if($entries['volumeInfo']['authors']!=null)
			by: 
			@foreach($entries['volumeInfo']['authors'] as $authors)
				{{$authors}}
			@endforeach
			@endif
			
		</div>
	</div>

@endforeach
{{$books_to_show->links()}}
@endsection