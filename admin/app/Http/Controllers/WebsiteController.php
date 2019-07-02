<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('website.home');
    }
    public function signup(){
        return view('website.signup');
    }
    public function dash(){
        return view('website.dashboard');
    }
    public function forgot_password(){
        return view('website.forgot_password');
    }
}
