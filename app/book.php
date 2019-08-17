<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
	protected $primaryKey = 'recordId'; 
	protected $fillable = [
        'bookId',
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
