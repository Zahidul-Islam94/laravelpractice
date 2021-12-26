<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteControler extends Controller
{
    function Home(){
        return view('home');
    }
}
