<?php

	namespace App\Http\Controllers;
	// require_once('vendor/autoload.php');
	use Scriptotek\GoogleBooks\GoogleBooks;

	use Illuminate\Http\Request;
	use GuzzleHttp\Client;

	class books extends Controller
	{
		public function create()
	    {
	    	return view('library.books.create');
	    }
	    public function store()
		{	
			$author = \App\author::firstOrCreate(
				['author_Name'=>request('author')]
				
			);
			if($author->id!=null){
				$id = $author->id;
			} else {
				$id = $author->authorId;
			}
			$book = new \App\book;
			$book->userId = auth()->user()->id;
			$book->title = request('title');
			$book->authorId = $id;
			$book->isbn = request('ISBN');
			$book->description = request('description');
			$book->cover = request('cover_link');
			$book->preview = request('book_link');
			 $book->save();
			 return redirect('/home');
		}
		public function view(){
			$books = \App\Book::where('userId',auth()->id())->get();
			return view('library.books.view',compact('books'));
		}
		public function fullview($id){
			
			 $books = \App\book::where('bookId',$id)->get();
			 $authors = \App\author::all();
			 foreach($books as $book){
			 	$authors = \App\author::where('authorId',$book->authorId)->get();
			 }
			 return view('library.books.viewbooks',compact('id','authors','books'));
		}
		public function searchView($id){

			$client = new \Google_Client();
			$service = new \Google_Service_Books($client);

			$results = $service->volumes->listVolumes($id);
			return view('library.books.searchbook',compact('results'));
		}
	}
?>