<?php
/**
 * Created by PhpStorm.
 * User: eseyden
 * Date: 1/19/16
 * Time: 7:57 PM
 */

namespace App\Http\Controllers\Auth;


class SocialiteAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();
        return $user;
        // $user->token;
    }
}