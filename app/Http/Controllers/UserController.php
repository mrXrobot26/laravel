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

}
