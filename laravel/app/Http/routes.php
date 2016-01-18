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

$title = null;
$welcomeRoute = function () use (&$title){
    Route::get('/',function () use ($title){
        return view('welcome',['title'=>$title]);
    });
};
$title = 'Eric Seyden';
Route::group(['domain'=>'{subdomain}.ericseyden.com'],$welcomeRoute);
Route::group(['domain'=>'ericseyden.com'],$welcomeRoute);
$title = 'Seyden Net';
Route::group(['domain'=>'{subdomain}.seyden.net'],$welcomeRoute);
Route::group(['domain'=>'seyden.net'],$welcomeRoute);
$title = '@fatalexe';
$fatalexeRoutes = function () {
  require app_path('Http/fatalexe.com.routes.php');
};
Route::group(['domain'=>'{subdomain}.fatalexe.com'],$fatalexeRoutes);
Route::group(['domain'=>'fatalexe.com'],$fatalexeRoutes);

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
    //
});
