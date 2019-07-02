<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    public function store(){
        //validate the form
        $this->validate(request(), [
            'name'=> 'required',
            'email' => 'required',
            'password' => bcrypt(request('password'))
        ]);
        //create and save the user
        $user = User::create(request(['name','email','password']));
        //sign them in
        
        //redirect to the home
        return redirect()->home();
    }
    public function postRegister(Request $request){
        return redirect('/');
    }
}
