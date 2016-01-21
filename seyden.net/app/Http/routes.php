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

$ericSeydenRoutes = function()
{
    require app_path('Http/routes.ericseyden.com.php');
};
Route::group(['domain'=>'{subdomain}.ericseyden.com'],$ericSeydenRoutes);
Route::group(['domain'=>'ericseyden.com'],$ericSeydenRoutes);

$seydenNetRoutes = function()
{
    require app_path('Http/routes.seyden.net.php');
};
Route::group(['domain'=>'{subdomain}.seyden.net'],$seydenNetRoutes);
Route::group(['domain'=>'seyden.net'],$seydenNetRoutes);

$fatalexeRoutes = function () {
  require app_path('Http/routes.fatalexe.com.php');
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
