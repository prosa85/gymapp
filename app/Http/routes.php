<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use gymapp\Exercise;
use gymapp\User;
use gymapp\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('user/{id}', 'UserController@showProfile');
Route::get('exercises','ExercisesController@index');


Route::get('/users', function () {
    return User::all();
});

Route::get('/posts', function () {
    return Post::all();
});
Route::get('/posts/{user}', function (User $user) {
    
	$user->load('post');
	return $user; 
});

Route::get('images/{image}', ['as' => 'image', function($image = null)
{
    $path = storage_path().'\\images\\'.$image;
    if (file_exists($path)) { 
        return response()->file($path);
    }
}]);
Route::get('api/users','UserController@showAll');

Route::resource('user','angularUserController');

