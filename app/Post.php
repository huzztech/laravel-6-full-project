<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

//use Auth;

class Post extends Model
{
    //

    protected $fillable = [

    	"title", "body", "thumbnail",
    ];

    


    protected function getTitleAttribute($value){

    	return strtolower($value);
    }

    protected function setTitleAttribute($value){

    	$this->attributes['title'] = strtolower($value);
		$this->attributes['user_id'] = Auth::id();
    }
}
