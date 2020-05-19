<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignUp() {
        return view('auth.signup');
    }

    public function postSignUp(Request $req) {
        $this->validate($req, [
           'email' => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|min:6'
        ]);
        User::create([
           'email' => $req->input('email'),
           'username' => $req->input('username'),
           'password' => bcrypt($req->input('password')),
        ]);
        return redirect()->route('home')->with('info', 'Successfuly Registration');
    }

    public function getSignIn() {
        return view('auth.signin');
    }

    public function postSignIn(Request $req) {
        $this->validate($req, [
            'email' => 'required|max:255',
            'password' => 'required|min:6'
        ]);

        if(!Auth::attempt($req->only(['email', 'password']), $req->has('remember'))) {
            return redirect()->back()->with('info', 'Wrong Email or Password');
        }

        return redirect()->route('home')->with('info', 'Wellcome');

    }

    public function signOut() {
        Auth::logout();

        return redirect()->route('home');
    }
}
