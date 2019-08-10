<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
	protected $guarded = [];
	protected $fillable = [
            
            'author_Name'          
            
	];
	//protected $primaryKey = 'authorId'; 
    public function books()
    {
    	return $this->hasMany(book::class,'authorId');
    	//return $this;
    }
}
