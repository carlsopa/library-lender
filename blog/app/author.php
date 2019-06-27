<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    protected $fillable = [
    	'firstName','lastName','authorId'
    ];
}
