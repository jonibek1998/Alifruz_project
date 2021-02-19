<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('front.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'name' => $request->get('login'),
            'password' => $request->get('password')
        ])){
            return redirect('/');
        }

        return back()->with('error', 'Login or password does not match!');
    }

    public function logout()
    {
        Auth::logout();

        return back();
    }
}
