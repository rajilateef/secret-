<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login()
    {
        return view('website.home');
    }

    public function postLogin(Request $request){

        $this->validate($request, [

            'email' => 'required|email',

            'password' => 'required',

        ]);

        if (Auth::attempt([

            'email' => $request->email,

            'password' => $request->password])

        ){

            return redirect('/dash');

        }

        return redirect('/login')->with('error', 'Invalid Email address or Password');

    }
}


