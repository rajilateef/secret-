<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
   public function create(){
    return view ('website.home');
   }
   public function store(){
       $user=new User;
       $user = input::get('email');
       $user = hash::make(input::get('password'));
       $user->save();
       return redirect::route('website.dashboard');
   }

}
