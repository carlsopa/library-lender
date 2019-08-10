@extends('home')
@section('content')
<form method=POST action='/books'>
	@csrf
	<div class="form-group">
		<div id="lookup_type">
			<p>Choose how you would like to search for your book: </p>
			<label for="isbn_lookup">ISBN</label>
			<input class="form-control-md" type="radio" id="isbn_lookup" name="lookup">
			<label for="title_lookup">Book title</label>
			<input class="form-control-md" type="radio" id="title_lookup" name="lookup"><br>
		</div>
		<div class="form-group" id="lookup_input" style="display:none">
			<label for="lookup_type" id="label"></label>
			<input class="form-control-md" type="text" name="lookup_type" id="search_input"><br>
		</div>
		<div class="form-group" id="lookup_selector" style="display:none">
			<label for="select_author" id="selector_title"></label><br>
			<select class="form-control-md" name="author_select" id="author_select"></select><br>
		</div>
		<div class="form-group" id="lookup_confirm" style="display:none">
			<span>Title: </span><span id="confirm_title"></span><br>
			<span>Author: </span><span id="confirm_author"></span><br>
			<input type="hidden" id="bt" name="title" value="">
			<input type="hidden" id="ba" name="author" value="">
			<input type="hidden" id="bi" name="ISBN" value="">
			<input type="hidden" id="bd" name="description" value="">
			<input type="hidden" id="bc" name="cover_link" value="">
			<input type="hidden" id="bl" name="book_link" value="">
			<button type="submit">Add book</button>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#isbn_lookup').on('change',function(){
				$('#lookup_input').show();
				$('#label').text('ISBN: ');
			})
			$('#title_lookup').on('change',function(){
				$('#lookup_input').show();
				$('#label').text('TITLE: ');
			})
			$('#search_input').focusout(function(){
				$('#lookup_selector').show();
				$.get('https://www.googleapis.com/books/v1/volumes?q='+$('#search_input').val(),function(books){
					console.log(books.items);

					$confirm = function(bookKey){
						console.log(bookKey);
						$('#confirm_title').text(books.items[bookKey].volumeInfo.title);
						$('#confirm_author').text(books.items[bookKey].volumeInfo.authors);
						$('#bt').val(books.items[bookKey].volumeInfo.title);
						$('#ba').val(books.items[bookKey].volumeInfo.authors);
						$('#bi').val(books.items[bookKey].volumeInfo.industryIdentifiers[0].identifier);
						$('#bd').val(books.items[bookKey].volumeInfo.description);
						$('#bc').val(books.items[bookKey].volumeInfo.imageLinks.smallThumbnail);
						$('#bl').val(books.items[bookKey].volumeInfo.infoLink);
					};
					// $lookup_box = function(text,term){
					// 	$('#selector_title').text(text);
					// 	$.each(books.items,function(key,value){
					// 		var $option = $('<option/>', {
					// 			value: key,
					// 			text: value.volumeInfo.+term
					// 		});
					// 		$('#author_select').append($option);
					// 	})	
					// 	$('#lookup_confirm').show();
					// 	$confirm(0);	
					// }

					if($('#isbn_lookup').is(':checked')){
						// $lookup_box('Select the correct title: ','title');
						$('#selector_title').text('Select the correct title: ');
						$.each(books.items,function(key,value){
							var $option = $('<option/>', {
								value: key,
								text: value.volumeInfo.title
							});
							$('#author_select').append($option);
						})	
						$('#lookup_confirm').show();
						$confirm(0);		
					}
					if($('#title_lookup').is(':checked')){
						// $lookup_box('Select the correct author: ','value.volumeInfo.authors');
						$('#selector_title').text('Select the correct author: ');
						$.each(books.items,function(key,value){
							var $option = $('<option/>', {
								value: key,
								text: value.volumeInfo.authors
							});
							$('#author_select').append($option);
						})
						$('#lookup_confirm').show();
						$confirm(0);					
					}

					$('#author_select').change(function(){
						var bookKey = $(this).children('option:selected').val();
						$confirm(bookKey);
						
					})
				});	
			});
			
		});
	</script>
@endsection()