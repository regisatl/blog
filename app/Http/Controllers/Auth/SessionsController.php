<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    /**
     * Handle an authentification attempt.
     * 
     * @param Request $request
     * @param \Illuminate\Http\RedirectResponse|mixed
     */
    public function authentificate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            // Authentication passed...
            return redirect()->intended('/');
        }
        ;

    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}