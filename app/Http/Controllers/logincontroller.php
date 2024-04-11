<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function loginshow(Request $request)
    {
        $request->validate([

            'email'    => 'required|bail|exists:users,email',

            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['email' => 'The credentials does not exists']);
        }
    }

}
