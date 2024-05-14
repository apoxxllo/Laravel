<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AccountController extends Controller
{
    public function loginPost(){

    }

    public function register(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $hashed = bcrypt($password);
        // print_r($hashed);
        User::create([
            'name'=> $name,
            'email'=> $email,
            'password' => $hashed
        ]);
        return view('Pages/login');
    }
}
