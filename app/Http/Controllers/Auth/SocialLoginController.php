<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialLoginController extends Controller
{
    public function redirect_to_provider( $social )
    {
        return Socialite::driver( $social )->redirect();
    }

    public function handle_provider_callback( $social )
    {
        $user = Socialite::driver( $social )->user();


    }
}
