<?php

namespace gymapp;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function user() 
	{ 	 
		return $this->belongsTo('gymapp\User');
	}
}
