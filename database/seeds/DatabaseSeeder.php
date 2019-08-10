<?php

use Illuminate\Database\Seeder;
use App\author;
use App\book;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('books')->delete();
        DB::table('authors')->delete();
        $json = File::get("database/data/user_seed.json");
        $data = json_decode($json,true);
        foreach($data as $obj){
        	user::create(array(
	        	'name'=>$obj['name'],
	        	'email'=>$obj['email'],
	        	'password'=>$obj['password']
        	));
        }
        $json = File::get("database/data/books_seed.json");
        $data = json_decode($json,true);
        foreach($data as $obj){
        	book::create(array(
	        	'userId'=>$obj['userId'],
		        'authorId'=>$obj['authorId'],
		        'title'=>$obj['title'],
		        'isbn'=>$obj['isbn'],
		        'description'=>$obj['description'],
		        'preview'=>$obj['preview'],
		        'cover'=>$obj['cover'],
		        'book_status'=>$obj['book_status']
        	));
        }
        $json = File::get("database/data/author_seed.json");
        $data = json_decode($json,true);
        foreach($data as $obj){
        	author::create(array(
        		'author_Name'=>$obj['author_Name']
        	));
        }
    }
}
