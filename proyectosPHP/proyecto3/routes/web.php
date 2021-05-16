<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/images' , function(){
    $images= Image::all();
    foreach($images as $image)
    {
        echo $image->image_path."<br>";
        echo $image->description ."<br>";
        echo $image->user->name." ".$image->user->surname."<br>";
        if(count($image->likes)>=1)
        {
            echo "likes:".count($image->likes);
        }
        if(count($image->comments) >=1)
        {
            echo "<h2>comentarios</h2>";
            foreach($image->comments as $comment)
            {
                echo $comment->user->name." ".$comment->user->surname .": ".$comment->content."<br>";
            }
        }
        echo "<hr>";
    }
});*/

Auth::routes();

Route::get( '/home','HomeController@index')->name('home');
