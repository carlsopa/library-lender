<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class books extends Controller
{
	public function create()
    {
    	return view('library.books.create');
    }
    public function store()
	{	
		$author = \App\author::firstOrCreate(
			['author_firstName'=>request('author_firstName'),
			'author_lastName'=>request('author_lastName')]
		);
		if($author->id!=null){
			$id = $author->id;
		} else {
			$id = $author->authorId;
		}
	
		 $book = new \App\book;
		 $book->userId = auth()->user()->id;
		 $book->title = request('book_title');
		 $book->authorId = $id;
		 $book->save();
		 return redirect('/home');
	}
	public function view(){
		$books = \App\book::where('userId',auth()->id())->get();
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
}