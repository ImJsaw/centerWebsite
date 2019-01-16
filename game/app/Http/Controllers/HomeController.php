<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function gd2016()
    {
        return view('gd2016');
    }

    public function gd2017()
    {
        return view('gd2017');
    }

    public function agenda()
    {
        return view('agenda');
    }

    public function rules()
    {
        return view('rules');
    }

    public function iflogin() {
        if(Auth::check())
            return redirect('/logged');
        else
            return view('login');
    }
}
