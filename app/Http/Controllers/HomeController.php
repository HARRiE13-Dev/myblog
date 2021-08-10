<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function about(){
        return 'about p';
    }
    public function service(){
        return 'service page';
    }
    public function contact(){
        return 'contact page';
    }
    public function login(){
        return 'login page';
    }
}
