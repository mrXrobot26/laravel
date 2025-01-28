<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExController extends Controller
{
    function homePage()
    {
        return view('homePage');


    }
    function aboutPage()
    {
        return '<h1>About Page</h1><a href="/"> view Home page</a> ';
    }


}
