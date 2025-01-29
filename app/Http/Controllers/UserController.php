<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    function register(Request $request){
        $incomingFields = $request->validate([
            'username' => ['required', 'min:3', 'max:10',Rule::unique('users','username')],
            'email' => ['required' , 'email' , Rule::unique('users','email')],
            'password' => ['required','min:8','max:24','confirmed' ]
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);
        return 'hello from register func';
    }

    function login(Request $request)
    {
        $incomingFields = $request->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required'
            ]
        );

        if(auth()->attempt( ['username'=> $incomingFields['loginusername'] , 'password' => $incomingFields['loginpassword']] ))
        {
            $request->session()->regenerate();
            return redirect('/')->with('success','Logged in');
        }
        else{
            return redirect('/')->with('fail','Login failed');
        }

    }

    function logout()
    {
        auth()->logout();
        return redirect('/')->with('success','Logged out');
    }

    function showCorrentHomePage(){
        if(auth()->check()){
            return view('homePage-feed');
        }else{
            return view('homePage');
        }
    }

}
