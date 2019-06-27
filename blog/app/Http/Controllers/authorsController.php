<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class authorsController extends Controller
{
	
    public function index(){
		$author = Author::all();
    	return view('library.authors',compact('author'));
    }
    public function create(){
    	return view('library.authorsCreate');
    }
    public function store(){
    	Author::create([
    		'firstName'=>request('firstName'),
    		'lastName'=>request('lastName'),
    		'authorId'=>random_int(0000, 1000)
    	]);
    	return redirect('/authors');
    }
    public function edit(Author $author){
    	return view('library.authorEdit',compact('author'));

    }
    public function update(Author $author){
    	$author->update(request(['firstName','lastName']));
    	return redirect('/authors');

    }
    public function destroy($id){
    	Author::find($id)->delete();
    	return redirect('/authors');
    }
    public function show(Author $author){
    	return view('library.authorShow',compact('author'));
    }
}
