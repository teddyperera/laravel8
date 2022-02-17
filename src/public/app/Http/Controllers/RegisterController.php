<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){

        return view('register.create');
    }

    public function store(){
        $attributes = request()->validate([
            'name' => 'required|max:225',
            'username' => 'required|max:225|min:3|unique:users,username',
            'email' => 'required|email|max:225|unique:users,email',
            'password' => 'required|max:225|min:4'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created');
    }
}
