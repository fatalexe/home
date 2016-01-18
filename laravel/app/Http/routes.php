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
$EricSeydenComRoutes = function () {
    Route::get('/',function () {
        return view('welcome',['title'=>'Eric Seyden']);
    });
};

Route::group(['domain'=>'{subdomain}.ericseyden.com'],$EricSeydenComRoutes);
Route::group(['domain'=>'ericseyden.com'],$EricSeydenComRoutes);

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
