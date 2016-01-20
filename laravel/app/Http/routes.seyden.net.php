<?php

Route::get('/',function (){
    return view('welcome',['title'=>'Seyden Net']);
});

Route::get('login/twitter', 'Auth\SocialiteAuthController@redirectToProvider');
Route::get('login/twitter/callback', 'Auth\SocialiteAuthController@handleProviderCallback');