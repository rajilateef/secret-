<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use admin;
namespace App\Http\Controllers;

class loginController extends Controller
{
    public function login(){
        return view('website.home');
    }
    public function postLogin(Request $request){
       admin::authenticate($request->all());
        return admin::check();
    }
    
        /**
         * Handle an authentication attempt.
         *
         * @return Response
         */
    public function authenticate()
        {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                // Authentication passed...
                if(Auth::user()->suspended){
                    return ('account-suspended');
                }
                return redirect()->intended('dashboard');
            }
        }
    }


