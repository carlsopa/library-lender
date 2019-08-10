<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
	protected $primaryKey = 'bookId'; 
	protected $fillable = [
		'userId',
        'authorId',
        'title',
        'isbn',
        'description',
        'preview',
        'cover',
        'book_status'
	];
	//$guarded = [];
    public function authors(){
    	return $this->belongsTo('App\author','authorId');
    }
}
