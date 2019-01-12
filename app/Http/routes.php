<?php


use App\Post;
use App\User;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('create', function(){

  $user = User::find(1);

  $post = new Post(['title'=>'firist post', 'body'=>'body post']);
  
  $user->posts()->save($post);

});


Route::get('read', function(){
     

    $user = User::find(1);

    foreach ($user->posts as $post) {
    
     echo $post->title;
    }

});



Route::get('update', function(){
     

    $user = User::find(1);
    
  //  $user->posts()->where('id','=',1)->update(['title'=>'i love Laravel','hay laravel']);


    $post = ['title'=>'i love Laravel','body'=>'hay laravel'];
    
    $user->posts()->where('id','=',1)->update($post);

});




Route::get('delete', function(){
     

    $user = User::find(1);
    
    $user->posts()->where('id','=',1)->delete();
});

























