<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(Request $request){

        //validate the form
        $this->validate($request, [
            'name'=> 'required',
            'email' => 'required',
            'password' => 'required|min:3'
        ]);


        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ];


        //create and save the user
        $user = User::create($data);

        
        //redirect to the home
        return redirect('/');
    }

}
