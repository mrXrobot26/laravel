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
        return view('singel-post');
    }


}
