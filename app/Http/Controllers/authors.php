<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\author;

	class authors extends Controller
	{
		public function __construct()
		{
			$this->middleware('auth');
		}
	    public function index(){

	    }
	    public function create()
	    {
	    	return view('library.authors.create');
	    }
		public function store()
		{	$author_id = 2000;
			$author = new \App\author;
			$author->author_firstName = request('author_firstName');
			$author->author_lastName = request('author_lastName');
			$author->save();
			return redirect('/authors/view');
		}
		public function view()
		{
			$authors = \App\author::all();
			return view('library.authors.view',compact('authors'));
		}
		public function viewbooks(author $author)
		{
			dd($aid);
			return view('library.authors.viewbooks');
		}
	}
?>