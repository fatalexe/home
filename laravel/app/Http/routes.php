<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$title = 'Eric Seyden';
$welcomeRoute = function () use (&$title){
    Route::get('/',function () use (&$title){
        return view('welcome',['title'=>$title]);
    });
};
Route::group(['domain'=>'{subdomain}.ericseyden.com'],$welcomeRoute);
Route::group(['domain'=>'ericseyden.com'],$welcomeRoute);
$title = 'Seyden Net';
Route::group(['domain'=>'{subdomain}.seyden.net'],$welcomeRoute);
Route::group(['domain'=>'seyden.net'],$welcomeRoute);

Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/hello',function () {
        return view('welcome');
    });
});
