<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    public function logout(){
        $rememberMeCookie = Auth::getRecallerName();
        $cookie = Cookie::forget($rememberMeCookie);
        session_start();
        session_destroy();
        Auth::logout();
        return redirect()->intended('/')->withCookie($cookie);

    }
}
