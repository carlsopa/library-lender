<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
	protected $primaryKey = 'bookId'; 
	//$guarded = [];
    public function authors(){
    	return $this->belongsTo('App\author','authorId');
    }
}
