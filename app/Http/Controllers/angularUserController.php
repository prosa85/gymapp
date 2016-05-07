<?php

namespace gymapp\Http\Controllers;

use Illuminate\Http\Request;

use gymapp\Http\Requests;
use App\User;

class angularUserController extends Controller
{
   public function showAll()
   {
   		return User::all();
   }
   
   public function index()
   {
		return view('todoApp/index');   		
   }

}
