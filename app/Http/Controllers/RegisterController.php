<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\UserVerification;

use Illuminate\Support\Facades\Mail;

use App\User;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function create() {
        return view('auth.create');
    }

    public function store() {
        $confirmed = request('confirmed');
        $this->validate(request(), [
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'required']);
         $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
         ]);

         Mail::to($user)->send(new UserVerification($user));
         return redirect('/login');
    }

    public function verify($id) {
        $user = User::find($id);
        $user->verified = true;
        $user->save();
        return redirect('/login');
    }
}
