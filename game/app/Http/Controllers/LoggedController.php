<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoggedController extends Controller
{
    function loggedto() {
        $user = Auth::user()->identity;
        if($user == "judge"){
            return redirect('/judge');
        }
        else if($user == "upload"){
            return redirect('/upload');
        }
    }

    function tojudge() {
        return view('judge');
    }

    function toupload() {
        return view('upload');
    }
}
