<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect()->home();    
    }
    public function create(){
        return view ('website.home');
    }
    public function store(){
        //authenticate the user
        if(! auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }
        //redirect to home
        return redirect()->dash();
    }
}
