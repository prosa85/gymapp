<?php

namespace gymapp\Http\Controllers;

use Illuminate\Http\Request;
use gymapp\Http\Controllers\Controller;
use gymapp\Http\Requests;
use gymapp\Exercise;

class ExercisesController extends Controller
{
	public function index() 
	{ 	 
		$exercises = Exercise::all();
		
		return view('exercises.index',compact('exercises'));
	}
}
