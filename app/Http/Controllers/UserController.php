<?php

namespace gymapp\Http\Controllers;
use gymapp\Http\Controllers;
use Illuminate\Http\Request;
use gymapp\Http\Requests;
use gymapp\User;
use gymapp\Image;


class UserController extends Controller
{
	 public function showProfile($id)
    {	$user = User::findOrFail($id);
	 	$image =Image::findOrFail($user->profile_pic);
	 $image = Image::findOrFail( User::findOrFail($id)->profile_pic) ;
	 //$path = storage_path('images/2015-11-26 022.jpg');
	 $path = $image->image_path;
	
//	 /return $path;
	 	//return $image;
        return view('user.profile', ['user' => User::findOrFail($id)])->with('path', $path);
    }
  /**
   * undocumented function
   *
   * @return void
   * @author 
   **/
  public function showAll()
  {
  	$users = User::all();
  	return $users;
  }
}
