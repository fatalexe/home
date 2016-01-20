<?php

Route::get('/',function (){
    return view('welcome',['title'=>'Seyden Net']);
});
Route::group(['middleware' => 'web'], function() {
    Route::get('login/user',function(){
        $user = Socialite::driver('github')->user();
        dd($user);
    });
    Route::get('login/twitter', 'Auth\SocialiteAuthController@redirectToProvider');
    Route::get('login/twitter/callback', 'Auth\SocialiteAuthController@handleProviderCallback');
});