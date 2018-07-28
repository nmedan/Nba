<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function create() {
        return view('auth.login');
    }

    public function store() {
        $this->validate(request(), ['email'=>'required', 'password'=>'required']);
        $credentials = request()->only(['email', 'password']);
        $email = request('email');
        $user = User::where('email', $email)->first();
        if (!auth()->attempt($credentials)) {
            return redirect()->back()->withErrors(['message'=>'Bad credentials']);
        }
        else if(!$user->verified) {
            auth()->logout();
            return view('auth.not-verified');
        }
        return redirect('/');
    }

    public function destroy() {
       auth()->logout();
       return redirect('/login');
    }
}
