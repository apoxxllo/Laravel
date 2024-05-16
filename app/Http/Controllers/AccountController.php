<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class AccountController extends Controller
{
    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect(route('index'))->with('success', 'Welcome, you are logged in!');
        }
    }

    public function register(Request $request)
    {
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
        return redirect(route('login'))->with('success', 'You have successfully registered. You may log in now!');
    }

    public function logout(){
        auth()->logout();
        return redirect(route('login'))->with('success', 'You have successfully logged out!');
    }
}
