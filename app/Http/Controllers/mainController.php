<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    function home(){
        return view('home');
    }

    function cake(){
        return view('cake');
    }
}
